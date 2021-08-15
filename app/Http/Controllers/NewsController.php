<?php

namespace App\Http\Controllers;

use App\BookingData;
use App\NewsData;
use App\QuestionData;
use App\TrainData;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NewsData::create($request->all());
        echo "<p style='background-color: #B94A48'>News Added!</p>";
        $train=TrainData::all();
        $news=NewsData::all();
        $questions=QuestionData::all();
        $booking=BookingData::all();
        return view('dashboard')->with('train',$train)->with('news',$news)->with('questions',$questions)->with('booking',$booking);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = NewsData::find($id);
        return view('editnews')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = NewsData::find($id);
        $news->title = request('title');
        $news->description = request('description');

        $news->save();
        $news->update($request->all());

        echo "<p style='background-color: #B94A48'>News updated successfully</p>";
        $train=TrainData::all();
        $news=NewsData::all();
        $questions=QuestionData::all();
        $booking=BookingData::all();
        return view('dashboard')->with('train',$train)->with('news',$news)->with('questions',$questions)->with('booking',$booking);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsData::find($id)->delete();
        $train=TrainData::all();
        $news=NewsData::all();
        $questions=QuestionData::all();
        $booking=BookingData::all();
        return view('dashboard')->with('train',$train)->with('news',$news)->with('questions',$questions)->with('booking',$booking);
    }
}
