<?php

Route::group(['namespace' => 'Rehan\FormGenerator\Http\Controller'], function (){

    Route::get('/form', 'FormGeneratorController@index');

});

