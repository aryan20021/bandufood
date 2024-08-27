<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Farmer extends Authenticatable
{
    protected $guarded=[];
    public $timestamps = false;
    use HasFactory;
}
