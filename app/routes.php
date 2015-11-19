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
	return View::make('template');
});


Route::controller('evento', 'EventoController');
Route::controller('participante', 'ParticipanteController');
Route::controller('participante2', 'Participante2Controller');
