<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation_Printing extends Model
{
    use HasUuids, HasFactory, SoftDeletes;
    protected $fillable = [
        'couple_id',
        'inventory_id',
        'size',
        'layby',
        'status',
        'booked_date',
        'approved_booked_date',
        'other_requirements',
        'payement_status',
        'delivery_status',
        
    ] ;
}
