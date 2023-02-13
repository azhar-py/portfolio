<?php

use App\Models\IntroModel;
use App\Models\SkillModel;

 function get_intro()
{
    # code...
    $IntroModel = IntroModel::with('skill')->where('UserId',auth()->user()->id)->first();
    return $IntroModel;

}