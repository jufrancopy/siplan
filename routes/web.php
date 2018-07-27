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

Route::redirect('/', 'publico'); 

Auth::routes();

//vista al publico
Route::get('/publico', 'Web\PaginaController@publico')->name('publico');

//Panel administrativo de proyectos
Route::resource('/servs_adms', 'Proyecto\ServicioAdministrativoController');
Route::resource('/eqs_tecns', 'Proyecto\EquipoTecnologicoController');
Route::resource('/infraestructuras', 'Proyecto\InfraestructuraController');

//Routes para Reportes PDF
Route::get('descargar-productos', 'Proyecto\ServicioAdministrativoController@pdf')->name('products.pdf');
Route::get('infra-pdf', 'Proyecto\InfraestructuraController@pdf')->name('infraestructura.pdf');
Route::get('pdf', 'General\PdfController@invoice');


//Panel administrativo del Dpto de Planificacion
Route::resource('/evaluacion', 'Planificacion\EvaluacionController');
Route::resource('/planificacion', 'Planificacion\PlanificacionController');

//Rutas de Configuraciones globales
Route::resource('/departamentos', 'General\DepartamentoController');
Route::resource('/establecimientos', 'General\EstablecimientoController');
