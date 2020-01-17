<?php 

namespace App\Practice;

use Illuminate\Database\Eloquent\Model;
use App\Practice\Quiz;
class Quiz extends Model
{
    protected $fillable = ['quiz'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
