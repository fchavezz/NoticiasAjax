<?php

Route::group(['prefix'=>'administracion','namespace'=>'Administracion'], function($route){
    $route->get('/', 'MainController@index')->name('adm.index');
    $route->post('/', 'MainController@ajaxRequest')->name('adm.ajax.example');
});