<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pokemons/search', 'PokedexController@getPokemonSearch');
Route::get('/pokemons/{id}', 'PokedexController@getPokemon');
Route::get('/users', 'UsersController@index');
Route::get('/users/me', 'UsersController@getUserMe')->middleware('auth');
Route::get('/users/search', 'UsersController@getSearchUser')->middleware('auth');
Route::post('/users/me/update', 'UsersController@updateUser')->middleware('auth')->name('updateme');
Route::get('/users/me/team', 'UsersController@getMeTeam')->middleware('auth');
Route::get('/users/{id}', 'UsersController@getUserId')->middleware('auth');
Route::get('/users/{id}/team', 'UsersController@getUserTeam')->middleware('auth');
Route::get('/users/{id}/team/trade', 'UsersController@getTeamTrade')->middleware('auth');
Route::post('/users/{id}/team/send', 'UsersController@getSendTeam')->middleware('auth')->name('trade');


Route::resource('pokemons', 'PokedexController', ['only' => [
    'index', 
]]);
