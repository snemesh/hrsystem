<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@showProfile');

Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'ProfileController@getResizeImage']);
Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'ProfileController@postResizeImage']);

//Route::post('/resizeImage', function (){
//    var_dump($_POST);
//    echo "tedt";
//});

//Route::post('upload', ['as'=>'uploading', 'uses'=>'ProfileController@upload']) {
//    echo 'userid = '. $request->userid."<br>";
//    var_dump($_POST);
//}]);

Route::get('upload/{userid}', ['as'=>'uploading', 'uses'=>'ProfileController@getResizeImage']);
Route::post('upload', ['as'=>'uploading', 'uses'=>'ProfileController@upload']);

//Route::get('saveyser/{userid}', ['as'=>'saveuserdata', 'uses'=>'ProfileController@getResizeImage']);
Route::post('saveuser/{userid}', ['as'=>'saveuserdata', 'uses'=>'ProfileController@saveuserdata']);


Route::post('/uploading', function (){
    var_dump($_POST);

});
