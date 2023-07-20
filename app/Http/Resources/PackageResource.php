<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'number_of_people' => $this->number_of_people,
            'time_of_event' => $this->time_of_event,
            'formal_menu' => $this->formal_menu,
            'soft_drinks' => $this->soft_drinks,
            'pina_colada' => $this->pina_colada,
            'whisky' => $this->whisky,
            'civil_ceremony' => $this->civil_ceremony,
            'tasting_menu' => $this->tasting_menu,
            'table_linen' => $this->table_linen,
            'full_assembly' => $this->full_assembly,
            'service_staff' => $this->service_staff,
            'valet_parking' => $this->valet_parking,
            'light_plant' => $this->light_plant,
            'customized_coordinator' => $this->customized_coordinator,
            'image_path' => $this->image_path,
            'price' => $this->price,
            'active' => $this->active,
            'created_by' => $this->created_by,
            'deleted_by' => $this->deleted_by,
            'created_by' => $this->created_by,
            'deleted_by' => $this->deleted_by,
        ];
    }
}
