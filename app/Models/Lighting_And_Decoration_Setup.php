<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lighting_And_Decoration_Setup extends Model
{
    use HasUuids, HasFactory, SoftDeletes;
    protected $fillable = [
        'couple_id',
        'inventory_id',
        'size',
        'layby',
        'status',
        'booked_date',
        'other_requirements',
        'payement_status',
        'delivery_status',
    ] ;
}
