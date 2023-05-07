<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\UserRecord;

class Vehicle extends Model
{
    use HasFactory,SoftDeletes, UserRecord;

    protected $fillable = ['user_id', 'plate_number'];

 
}
