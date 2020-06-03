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







Route::get('/', function(){
   return view("Template");
});

// Matiere
   Route::get('/matiere','MatController@affiche');       //show data base value of table matieres
   Route::get('/addmatiere','MatController@formhtml');
   Route::post('/addmatiere','MatController@form');       //form that save data of matiere
   Route::get('/savematiere','MatController@savematiere');  // add fixed value to data base

   // epreuves
   Route::get('/epreuves','eprController@affiche');  //show data base value of table epreuves
   Route::get('/addepreuve','eprController@formhtml');
   Route::post('/addepreuve','eprController@form');       //form that save data of matiere


   //CRUD
   Route::resource('CrudMatiere', 'MatiereController');
   Route::resource('CrudEpreuve', 'EpreveController');
