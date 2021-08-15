<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function index(){
        $question = DB::table('question')->get();
        $train = DB::table('train')->get();
        return view('booking')->with('question',$question)->with('train',$train);
    }
}
