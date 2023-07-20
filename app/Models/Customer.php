<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
        'boy_name',
        'boy_patternal_surname',
        'boy_mother_surname',
        'girl_name',
        'girl_paternal_surname',
        'girl_mother_surname',
        'address',
        'street_number',
        'state',
        'telephone',
        'second_telephone',
        'facebook',
        'instagram',
        'tiktok',
        'ine_id',
        'active',
        'created_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
