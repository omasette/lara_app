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
//simple route name kuchoma
Route::get('kuchoma', 'KuchomaController@tuchome');
Route::get('sms', 'omasetteController@test_sms');
Route::get('/', function () {
    return view('welcome');
});

Route::get('all',
['as' => 'all', 'uses' => 'leahcontroller@lister']);
Route::post('del/(id)',
['uses' => 'leahcontroller@delete', 'as' => 'del']);
Route::post('add',
['as' => 'add', 'uses' => 'leahcontroller@add']);

//project routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/property', 'NyumbachapchapController@store');
Route::get('/loginform', 'NyumbachapchapController@go');
//Route::post('/login', 'NyumbachapchapController@edit');
Route::get('/newtable', 'NyumbachapchapController@create');
Route::post('/User', 'NyumbachapchapController@store');
Route::get('/property_table', 'NyumbachapchapController@show');
Route::get('/form', 'NyumbachapchapController@index');
Route::get('/propertyupdate/{id}', 'NyumbachapchapController@update');
Route::get('/propertydestroy/{id}', 'NyumbachapchapController@destroy');

Route::get('/album/{id}', array('as' => 'show_album','uses' => 'NyumbachapchapController@getAlbum'));


/*photo portfolio routes*/
Route::get('/portfolio', array('as' => 'index','uses' => 'AlbumsController@getList'));
Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
Route::get('/create_album', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));
Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));
