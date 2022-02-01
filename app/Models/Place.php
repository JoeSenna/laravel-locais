<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        //'id',
        'name',
        'description',
        'address',
        'created_at',
        'updated_at',
    ];
}
