<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Abouts;

class Abouts extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['title', 'doc'];
}
