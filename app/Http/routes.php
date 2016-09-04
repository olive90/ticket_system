<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@home');
Route::get('/','TicketsController@create');
Route::get('view','TicketsController@index');
Route::get('contact','PagesController@contact');

Route::post('/','TicketsController@store');

Route::get('/ticket/{slug?}','TicketsController@show');

Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');

Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

Route::get('send_to','TicketsController@getSendto');

Route::get('sendemail', function () {

    $data = array(
        'name' => "Support Ticket System",
    );

    Mail::send('emails.ticket', $data, function ($message) {

    	$someVariable = $request->input('email');

        $message->from('olivehasan99@gmail.com', 'Support Ticket System');

        $message->to('email')->subject('Confirmation email');

    });

    return "Your email has been sent successfully";

});
