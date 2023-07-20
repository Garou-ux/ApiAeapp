<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'client_id',
        'package_id',
        'status_id',
        'subtotal',
        'iva',
        'total',
        'remaining',
        'created_by',
        'updated_by',
        'deleted_by',
        'active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
