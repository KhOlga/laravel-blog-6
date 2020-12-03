<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/** @mixin Builder */
class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'name', 'description', 'user_id'
    ];


}
