<?php

namespace App\Http\Controllers;

use App\BookingData;
use App\NewsData;
use App\QuestionData;
use App\TrainData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $name=$request->input('admin');
        $password=$request->input('password');

       if($name=='Admin' && $password=='admin') {
           $train = TrainData::all();
           $news = NewsData::all();
           $questions = QuestionData::all();
           $booking = BookingData::all();
           return view('dashboard')->with('train', $train)->with('news', $news)
               ->with('questions', $questions)->with('booking', $booking);
       }
       else
       {
           echo "<p style='background-color: #B94A48'>Wrong Password</p>";
           return view('adminlogin');
       }
    }

    public function answer($id)
    {
        $question=QuestionData::all();
       // $booking= BookingData::where('id','=',$id)->first();
        $booking =   DB::table('booking')->select('*')->where('id','=',$id)->get();
        $answer_array=explode(',',$booking[0]->answer);

        return view('answer')->with('answer_array',$answer_array)->with('question',$question);
    }

    public function deleteBooking($id)
    {
        BookingData::find($id)->delete();
        $train=TrainData::all();
        $news=NewsData::all();
        $questions=QuestionData::all();
        $booking=BookingData::all();
        return view('dashboard')->with('train',$train)->with('news',$news)->with('questions',$questions)
            ->with('booking',$booking);
    }
}
