<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['title', 'body', 'user_id'];

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
