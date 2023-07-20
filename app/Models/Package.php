<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'description',
        'number_of_people',
        'time_of_event',
        'formal_menu',
        'soft_drinks',
        'pina_colada',
        'whisky',
        'civil_ceremony',
        'tasting_menu',
        'table_linen',
        'full_assembly',
        'service_staff',
        'valet_parking',
        'light_plant',
        'customized_coordinator',
        'image_path',
        'price',
        'active',
        'created_by',
        'deleted_by',
        'created_by',
        'deleted_by'
    ];
}
