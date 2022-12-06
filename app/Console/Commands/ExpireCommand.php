<?php

namespace App\Console\Commands;

use App\Models\Agreement;
use App\Models\Record;
use App\Models\User;
use App\Notifications\AgreementExpiration;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class ExpireCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expire:verification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verificamos los convenios que estan por vencer';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users=User::all();
        $record=Record::all();
        $today=Carbon::now()->toDateString();
        if(sizeof($record)==0){
            $fecha=new Record();
            $fecha->last_verification=$today;
            $fecha->save();
        }

        $record=Record::first();
        $last=$record->last_verification;
        if($today==$last||$today==$last->addDay('1')){

            $agreements=Agreement::where('notification',$today)->get();
            if(sizeof($agreements)>0){
                foreach($agreements as $agreement){
                    Notification::send($users,new AgreementExpiration ($agreement->id));
                    Agreement::where('id',$agreement->id)->update(['status'=>'POR VENCER']);
                    // $convenio->update(['status'=>'POR VENCER']);
                }
            }
            $agreements=Agreement::where('expiration','<=',$today)->where('status','!=','VENCIDO')->get();
            if(sizeof($agreements)>0){
                foreach($agreements as $agreement){
                    Notification::send($users,new AgreementExpiration ($agreement->id));
                    Agreement::where('id',$agreement->id)->update(['status'=>'VENCIDO']);
                }
            }
        }else{
            while($today==$last){

                    $agreements=Agreement::where('notification',$last)->get();
                    if(sizeof($agreements)>0){
                        foreach($agreements as $agreement){
                            Notification::send($users,new AgreementExpiration ($agreement->id));
                            Agreement::where('id',$agreement->id)->update(['status'=>'POR VENCER']);
                            // $convenio->update(['status'=>'POR VENCER']);
                        }
                    }
                    $agreements=Agreement::where('expiration','<',$last)->where('status','!=','VENCIDO')->get();
                    if(sizeof($agreements)>0){
                        foreach($agreements as $agreement){
                            Notification::send($users,new AgreementExpiration ($agreement->id));
                            Agreement::where('id',$agreement->id)->update(['status'=>'VENCIDO']);
                        }
                    }
                    $last = $last->addDay('1');
            }
        }
        Record::where('id','1')->update(['last_verification'=>$today]);
    }
}
