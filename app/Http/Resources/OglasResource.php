<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OglasResource extends JsonResource
{
    public static $wrap="oglas";
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->resource==null)
        return ['message' => 'Ne postoji oglas sa tim id-jem '];
        else return [
            'id'=>$this->resource->id,
            'model'=>$this->resource->model,
            'marka'=>$this->resource->marka,
            'gorivo'=>$this->resource->gorivo,
            'tip_vozila'=>$this->resource->tip_vozila,
            'user'=>$this->resource->user,
            'cena'=>$this->cena
        ];
    }
}
