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
	//return View::make('hello');
	Schema::create('users', function($table)
	{
		$table->increments('id');
		$table->text('username', 32);
		$table->text('email', 320);
		$table->text('password', 60);
		$table->timestamps();

	});
});
