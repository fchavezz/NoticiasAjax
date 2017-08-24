<?php
/*
|--------------------------------------------------------------------------
| Ruta principal
|--------------------------------------------------------------------------
| Esta ruta solo sirve para mostrar el index principal de la pagina de upemor
ruta => controller
modelo => migracion
|
*/


/*
|--------------------------------------------------------------------------
| Rutas para el administrador
|-------------------------------------------------------------------------- 
*/


Route::get('noticias/admin/dashboard', 'AdminController@index');
Route::get('noticias/admin/dashboard/nota/nueva', 'NotasController@index');
Route::post('noticias/admin/dashboard/nota/nueva', 'NotasController@newcat')->name('notas.newcat');

Route::resource('noticias/admin/dashboard/nota/','NotasController',
['names' => [	
    'store' => 'notas.store',
    'create' => 'notas.create',
    'show' => 'notas.show',
    'update' => 'notas.update',
    'destroy' => 'notas.destroy',
    'edit' => 'notas.edit'        
], 'except' => [
    'index'
]
]);
Route::get('/noticias', 'NotasController@mosaicoNotas');

//Route::get('img-upload','ImageController@imgUpload');
Route::get('noticias/noticiaimagen/{filename}',[
    'uses'=>'NotasController@getImagen',
    'as'=>'nota.imagen'
]);



Route::get('noticias/{slug}',['as'=>'noticias.single','uses'=>'NotasController@getSingle']);

//Route::post('noticias', ['as'=>'noticias','uses'=>'ItemController@create']);





/*
|--------------------------------------------------------------------------
| Rutas de Noticias
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::resource('noticias', 'NoticiasController');



/*
|--------------------------------------------------------------------------
| Rutas de Eventos
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::resource('eventos', 'EventosController');
