<?php
Route::get('/', 'HomeController@welcome');

Route::get('/booking', 'ActionController@index');

Route::get('/reservation', 'HomeController@reserve');

Route::get('/adminlogin', function () {
    return view('adminlogin');
})->name('adminlogin');

Route::post('/admindashboard', 'AdminController@index')->name('admindashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('train', 'TrainController');
Route::get('train/delete/{id}','TrainController@destroy')->name('train.destroy');

Route::resource('news', 'NewsController');
Route::get('news/delete/{id}','NewsController@destroy')->name('news.destroy');

Route::resource('question', 'QuestionsController');
Route::get('question/delete/{id}','QuestionsController@destroy')->name('question.destroy');

Route::get('question.destroy/{id}','AdminController@deleteBooking')->name('booking.destroy');


Route::get('/create', function(){
    return view('create');
});
Route::get('/createnews', function(){
    return view('createnews');
});
Route::get('/createquestion', function(){
    return view('createquestion');
});

Route::get('answer/{id}', 'AdminController@answer')->name('answer');





