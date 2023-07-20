<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
           'id' => $this->id,
           'boy_name' => $this->boy_name,
           'boy_patternal_surname' => $this->boy_patternal_surname,
           'boy_mother_surname' => $this->boy_mother_surname,
           'girl_name' => $this->girl_name,
           'girl_paternal_surname' => $this->girl_paternal_surname,
           'girl_mother_surname' => $this->girl_mother_surname,
           'address' => $this->address,
           'street_number' => $this->street_number,
           'state' => $this->state,
           'telephone' => $this->telephone,
           'second_telephone' => $this->second_telephone,
           'facebook' => $this->facebook,
           'instagram' => $this->instagram,
           'tiktok' => $this->tiktok,
           'ine_id' => $this->ine_id,
           'active' => $this->active,
           'created_by' => $this->created_by,
           'deleted_by' => $this->deleted_by,
           'created_at' => $this->created_at,
           'updated_at' => $this->updated_at,
           'deleted_at' => $this->deleted_at
       ];
    }
}
