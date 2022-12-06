<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgreementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Resolucion'=>$this->resolution,
            'Titulo'=>$this->title,
            'Objetivo'=>$this->objetive,
            'Fecha de aprovacion'=>$this->approbation,
            'Fecha de suscripcion'=>$this->subscription,
            'Años'=>$this->years,
            'Meses'=>$this->months,
            'Dias'=>$this->days,
            'Fecha de Expiracion'=>$this->expiration,
            'Sector'=>$this->sector,
            'Organizacion'=>$this->organization,
            'Locacion'=>$this->location,
            'Pais'=>$this->country_id,
            'Region'=>$this->region_id,
            'Provincia'=>$this->province_id,
            'Cobertura'=>$this->coverage_id,
            'Tipo de Convenio'=>$this->organization_id,
            'Archivo'=>$this->path,
            'Expiracion'=>$this->expiration
        ];
    }
}
