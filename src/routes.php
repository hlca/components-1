<?php
	Route::group(array('before' => array('auth','cancerbero')), function() {
		Route::resource('usuarios', 'usuariosController');
		Route::resource('roles', 'rolesController');
		Route::resource('logaccesos','logController');
	});

	Route::group(array('before' => array('auth','god')), function() {
		Route::resource('cancerbero/modulos', 'modulosController');
		Route::resource('cancerbero/permisos', 'permisosController');
		Route::resource('cancerbero/generarmodulopermisos','generarmodulopermisosController', array('only'=>array('index','store')));
	});

	//Estas rutas generan 404 si no existen
	Route::get('browserconfig.xml', function(){
		return '';
	});