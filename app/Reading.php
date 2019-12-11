<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reading;

class Reading extends Model
{

    // protected $table = 'reading';
    protected $table = 'abouts';

    // protected $fillable = ['title', 'documment'];
    protected $fillable = ['title', 'doc'];

}