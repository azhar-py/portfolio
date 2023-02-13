<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntroModel;
use App\Models\SkillModel;

class IntroController extends Controller
{
    //



    public function search()
    {
        # code...
        $IntroModel = IntroModel::with('skill')->where('UserId',auth()->user()->id)->get();
        return view('portfolio/intro/search' , compact('IntroModel'));
    }

    public function add_intro()
    {
        # code...
        return view('portfolio/intro/intro');
    }


    public function save_intro(Request $request)
    {
        # code...
        $add_Intro = new IntroModel();
        $add_Intro->UserId = auth()->user()->id;
        $add_Intro->about = $request->intro;
        $add_Intro->save();
        $get_intro = IntroModel::orderBy('id', 'DESC')->first();
        foreach($request->name as $p=>$name){
            $SkillModel = new SkillModel();
            $SkillModel->IntroId =  $get_intro->id;
            $SkillModel->name =  $request->name[$p];
            $SkillModel->level =  $request->Level[$p];
            $SkillModel->percentage =  $request->percentage[$p];
            $SkillModel->save();
        }

        return redirect('search')->with('status', 'Sucessfully Add Intro' );
       
        // dd($request->all());
    }


    public function edit_intro($id)
    {
        # code...
        $IntroModel = IntroModel::with('skill')->where('UserId',auth()->user()->id)->where('id',$id)->first();
        return view('portfolio/intro/edit-intro' , compact('IntroModel'));
    }
}
