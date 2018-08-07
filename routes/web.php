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
Route::get('/poi', 'Planificacion\PoiController@ver')->name('poi');
Route::get('/prog1', 'Planificacion\PoiController@prog1')->name('prog1');
Route::get('/listado', 'Planificacion\PoiController@listadoProg1')->name('listado');

//Rutas de Programa 2
Route::get('/prog2', 'Planificacion\PoiController@prog2')->name('prog2');// 
Route::get('/dptos/{id}', 'Planificacion\PoiController@dptos')->name('dptos');//Lista Meses Enero a Junio
Route::get('/listdptos/{id}', 'Planificacion\PoiController@listadoProg2')->name('listdptos');//LIsta Departamentos y envia con id
Route::get('/list_prog2/{id}', 'Planificacion\PoiController@listadoProg2')->name('list_prog2');

//Rutas de Configuraciones globales
Route::resource('/departamentos', 'General\DepartamentoController');
Route::resource('/establecimientos', 'General\EstablecimientoController');

//Pruebas 
Route::get('/prodview','General\TestController@prodfunct')->name('prodview');
Route::get('/findProductName','General\TestController@findProductName');
Route::get('/findPrice','General\TestController@findPrice');



//Tipos de rutas
/*Route::get('pruebaA', function () {
    return 'Imprimiendo desde web.php';
});

Route::get('/user', 'UserController@index');
*/
//Esto solamente muestra la vista desde la ruta escrita en la url
/*Route::view('/poi', 'planificacion/poi/index');*/



