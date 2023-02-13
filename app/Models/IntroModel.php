<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntroModel extends Model
{
    use HasFactory;

    function skill()
    {
        return $this->hasMany('App\Models\SkillModel' , 'IntroId' , 'id');
    }
}
