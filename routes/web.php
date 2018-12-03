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

Route::redirect('/', 'login' ); 

Auth::routes();

//vista al publico
Route::get('/publico', 'Web\PaginaController@publico')->name('publico');

//Panel administrativo de proyectos
Route::resource('/servs_adms', 'Proyecto\ServicioAdministrativoController');
Route::resource('/eqs_tecns', 'Proyecto\EquipoTecnologicoController');
Route::resource('/infraestructuras', 'Proyecto\InfraestructuraController');
Route::resource('/med_inms', 'Proyecto\MedicamentoInsumoController');
Route::resource('/tls_hs', 'Proyecto\TalentoHumanoController');
Route::resource('/modulos', 'Proyecto\ModuloController');
Route::resource('/areas', 'Proyecto\AreaController');
Route::get('graf_areas', 'Proyecto\AreaController@graf_areas')->name('graf_areas');

//Routes para Reportes PDF
Route::get('descargar-productos', 'Proyecto\ServicioAdministrativoController@pdf')->name('products.pdf');
Route::get('infra-pdf', 'Proyecto\InfraestructuraController@pdf')->name('infraestructura.pdf');
Route::get('pdf', 'General\PdfController@ejemplo')->name('pdf');

//Panel administrativo del Dpto de Planificacion
Route::resource('/evaluacion', 'Planificacion\EvaluacionController');
Route::resource('/tipo_evaluaciones', 'Planificacion\TipoEvaluacionController');
Route::resource('/planificacion', 'Planificacion\PlanificacionController');
Route::get('/poi', 'Planificacion\PoiController@ver')->name('poi');
Route::get('/prog1', 'Planificacion\PoiController@prog1')->name('prog1');
Route::get('/listadoProg1', 'Planificacion\PoiController@listadoProg1')->name('listadoProg1');
//Rutas de Programa 2
Route::get('/prog2', 'Planificacion\PoiController@prog2')->name('prog2');// lista Meses
Route::get('/report1', 'Planificacion\PoiController@report1')->name('report1');// lista Meses
Route::get('/report2', 'Planificacion\PoiController@report2')->name('report2');// lista Meses
Route::get('/dptos/{idmes}', 'Planificacion\PoiController@dptos')->name('dptos'); //Id mes y Id Dpto se envia a metoto listadoProg2
Route::get('/listado/{idmes}/{iddpto}', 'Planificacion\PoiController@listadoProg2')->name('listado');//LIsta Departamentos y envia con id
//Routes para Reportes PDF de Programa2
Route::get('listadopdf/{idmespdf}/{iddptopdf}', 'Planificacion\PoiController@pdf')->name('listadopdf');
//Reportes de direcciones
Route::resource('/reportes', 'Planificacion\EvaluacionController');
Route::get('/listar_reportes', 'Planificacion\EvaluacionController@listar')->name('listar_reportes');

//Rutas de Configuraciones globales
Route::resource('/departamentos', 'General\DepartamentoController');
Route::resource('/organigramas', 'General\OrganigramaController');
Route::get('/listadoDptocreate','General\DepartamentoController@listadoDptocreate')->name('listadoDptocreate');
Route::get('/index','General\DepartamentoController@listadoDptoindex');
Route::resource('/establecimientos', 'General\EstablecimientoController');


//Pruebas 
Route::get('/prodview','General\TestController@prodfunct')->name('prodview');
Route::get('/findProductName','General\TestController@findProductName');
Route::get('/findPrice','General\TestController@findPrice');
Route::get('/fpdf','General\TestController@fpdf')->name('fpdf');
Route::get('/lilypond','General\MusicController@prueba')->name('lilypond');


//Ruta para prueba de templates 
Route::get('/pruebadiseno', function () {
    return view('layouts.app2');
});



//Tipos de rutas
/*Route::get('pruebaA', function () {
    return 'Imprimiendo desde web.php';
});

Route::get('/user', 'UserController@index');

//Esto solamente muestra la vista desde la ruta escrita en la url
/*Route::view('/poi', 'planificacion/poi/index');*/



