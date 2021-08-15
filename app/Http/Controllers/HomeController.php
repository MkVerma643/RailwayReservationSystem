<?php

namespace App\Http\Controllers;

use App\BookingData;
use App\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $train = DB::table('train')->get();
        $news = DB::table('news')->get();
        return view('welcome')->with('train',$train)->with('news',$news);
    }

    public function reserve(Request $request)
    {
        /*$request->validate([
            'trainname' => 'required',
            'depart_date' => 'required',
            'class' => 'required'
        ]);*/
        $depart_date=$request->input('depart_date');
        $class=$request->input('class');
        $answer_array=$request->input('answer');
        $names_str = implode(" , ",$answer_array);
        $train_id=$request->input('trainname');

        $userId = Auth::id();

        $ticket= DB::table('train')->select(
            'totalticket'
        )->where('id','=',$train_id)->get()->toArray();

        $NumberOfTicket = 0;
        foreach ($ticket as $data){
            $NumberOfTicket = $data->totalticket;
        }

        if($NumberOfTicket>0)
        {
            $NumberOfTicket--;
            DB::table('train')->where('id','=',$train_id)->update(['totalticket'=>$NumberOfTicket]);


        DB::table('booking')->insert(
            ['passenger_id'=>$userId,'train_id' => $train_id, 'depart_date' => $depart_date,'class'=>$class,'answer'=>$names_str]
        );

        echo "<p style='background-color: #B94A48'>Booking Successfull</p>";
        $question = DB::table('question')->get();
        $train = DB::table('train')->get();
        return view('booking')->with('question',$question)->with('train',$train);
        }
        else
        {
            echo "<p style='background-color: #B94A48'>Ticket Not Available</p>";
            $question = DB::table('question')->get();
            $train = DB::table('train')->get();
            return view('booking')->with('question',$question)->with('train',$train);
        }


    }



}
