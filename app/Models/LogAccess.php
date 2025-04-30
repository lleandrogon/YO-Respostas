<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAccess extends Model
{
    protected $table = 'log_access';
    protected $fillable = ['log', 'created_at', 'updated_at'];
}
