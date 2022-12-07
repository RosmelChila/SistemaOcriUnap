<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgreementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'resolution'=>'required|unique:agreements,resolution',
            'title'=>'required',
            'objetive'=>'required',
            'approbation'=>'required',
            'subscription'=>'required',
            'years'=>'required',
            'months'=>'required',
            'days'=>'required',
            // 'expiration'=>'required',
            'sector'=>'required',
            'organization'=>'required',
            'location'=>'required',
            'country_id'=>'required',
            // 'region_id'=>'required',
            // 'province_id'=>'required',
            'coverage_id'=>'required',
            'organization_id'=>'required'
            // 'path'=>'required'
        ];
    }
}
