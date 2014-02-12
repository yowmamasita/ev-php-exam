<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('form');
});

Route::post('save', function()
{
    $rules = array(
                'first_name' => 'required|alpha_dash|min:2',
                'last_name' => 'required|alpha_dash|min:2',
                'email' => 'required|email|unique:users',
                'birthdate' => 'required|date',
                'favorite' => 'required|exists:ingredients,name',
                );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
        return Redirect::to('/')->withInput()->withErrors($validator);
    }
    $user = new User(Input::all());
    $user->save();
    Session::flash('success', 'Successfully stored in database!');
    return Redirect::to('/');
});

Route::get('autocomplete', function()
{
    $term = Input::get('term');
    $return_arr = ['yyy','xxx'];
    return json_encode($return_arr);
});
