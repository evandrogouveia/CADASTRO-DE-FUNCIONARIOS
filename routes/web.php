<?php
Route::match(['post', 'get'], '/',
        ['as' =>'home', 'uses'=>'FuncionarioController@cadastrar']);
Route::match(['post', 'get'], '/buscar.htm',
        ['as' =>'buscar', 'uses'=>'FuncionarioController@buscar']);
