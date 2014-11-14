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
	Schema::create('userstwo', function($table1)
	{
		$table1->increments('id');
		$table1->text('username', 32);
		$table1->text('email', 320);
		$table1->text('password', 60);
		$table1->timestamps();

	});
});
/*
Route::get('/', function()
{
	Schema::create('game', function($table)
	{
		//$table->increments('id');
		$table->text('name');
		$table->text('description');
	});
});

Route::get('/', function(){
	$game = new Game;
	$game->name= 'Numele jocului';
	$game->description= 'Descrierea jocului';
	$game->save();
});
Route::get('/', function(){
	$game=Game::find(1);
	return $game->name;
});
*/
