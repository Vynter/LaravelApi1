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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('random', function () {
    return 'random page';
});

Route::get('articles', 'ArticleController@index');




Route::any('/article/{article}/id/{id}', function ($articleID, $idArt) {
    return 'article id: ' . $idArt . ' est : ' . $articleID;
});


Route::any('/art/{article}/n/{id}', function ($articleID, $idArt) {
    return 'article id: ' . $idArt . ' est : ' . $articleID;
})->where("id", "[0-9]+");

Route::any('/user/{user}/n/{num}', function ($numname, $userNum) {
    return 'l\'utilisateur : ' . $numname . ' est le : ' . $userNum;
})->where(["user" => "[A-Za-z0-9]+", "num" => "[0-9]+"]);

Route::get('/option/{param?}', function ($param = null) {
    return "le paramétre est  $param ";
})->where("param", "[0-9]+")->name('opt');

Route::get('content', 'ArticleController@content');
*/
/*Route::get('index', function () {
    return view('layouts.app');
});*/

Route::get('appli', function () {
    return view('layouts.childApp', ['id' => 5]);
});

Route::match(['post', 'get'], 'app', 'AppController@app', ['id' => 5])->name('articles');

//resources permet d'avoir tt les url de crud dans le controller en somme
Route::resource('articles', 'ArtController');
/**
 *@param1 lien tapé
 *@param2 le nom du router surlequel on est rediriger
 *@param3 statue 301 qu iest une resdirection permanente
 *//*
Route::redirect('/redirige', 'random', '301');

//same as above
Route::permanentRedirect('test', '/');
 */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');