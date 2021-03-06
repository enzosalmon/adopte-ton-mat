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


Route::get('/ficheAssociation', function () {
    return view('ficheAssociation');
});
Route::get('/ajoutMateriel', function () {
    if (! auth()->check()) {
        return redirect('/login');
    }
    return view('materiel/ajoutMateriel');
});
Auth::routes();

Route::get('/', 'CategorieController@index')->name('home');

Route::get('/home', 'CategorieController@index')->name('home');

Route::get('/association','AssociationController@index')->name('associations.index');

Route::get('/materiel/{category}','MaterielController@details')->name('materiel.details');

Route::get('/maladie','MaladieController@index')->name('maladie.index');

Route::get('/materiel','MaterielController@index')->name('materiel.index');

Route::get('/sous_categoire','SousCategorieController@index')->name('sousCategoire.index');

Route::get('/AddMateriel','MaterielController@add')->name('materiel.add');

Route::get('/categorie/{category}','SousCategorieController@getThisByCategoryId')->name('sousCategorie.getThisByCategoryId');

Route::get('/categorie/{category}/sousCategorie/{subCategory}','MaterielController@getThisBySubCategoryId')->name('materiel.getThisBySubCategoryId');

