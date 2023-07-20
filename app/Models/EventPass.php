<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\S;

class EventPass extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'event_id',
        'amount',
        'voucher_image_path',
        'comment',
        'created_by',
        'active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
