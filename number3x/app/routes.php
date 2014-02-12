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
    $return_arr = [];
    $term = Input::get('term');
    $terms = DB::table('ingredients')->select('name')->where('name', 'like', '%'.$term.'%')->orderBy('popularity', 'desc')->take(10)->remember(5)->get();
    foreach ($terms as $t) {
        $return_arr[] = $t->name;
    }
    return json_encode($return_arr);
});

Route::get('admin/ingredient', function()
{
    return View::make('ingredient');
});

Route::post('admin/ingredient/edit', function()
{
    $name = Input::get('name');
    $ingredient = Ingredient::where('name', $name)->first();
    return View::make('edit')->with('ingredient', $ingredient);
});

Route::post('admin/ingredient', array('as' => 'ingredientudpate', function()
{
    DB::table('ingredients')->where('id',Input::get('id'))->update(['name'=>Input::get('name'), 'popularity'=>Input::get('popularity')]);
    Session::flash('success', 'Successfully stored in database!');
    return Redirect::to('admin/ingredient');
}));
