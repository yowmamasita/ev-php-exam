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
    // $user = User::find(1);
    // var_dump($user->ingredient->name);

    // $ingredient = Ingredient::find(9390);
    // var_dump($ingredient->users->first()->first_name);

    // $user = new User;
    // $user->first_name = 'John';
    // $user->last_name = 'John';
    // $user->birthdate = 'John';
    // $user->email = 'John';
    // $user->favorite = 'John';
    // $user->save();

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
