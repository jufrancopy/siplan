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
Route::get('/prog2', 'Planificacion\PoiController@prog2')->name('prog2');// lista Meses
Route::get('/dptos/{idmes}', 'Planificacion\PoiController@dptos')->name('dptos'); //Id mes y Id Dpto se envia a metoto listadoProg2
Route::get('/listado/{idmes}/{iddpto}', 'Planificacion\PoiController@listadoProg2')->name('listado');//LIsta Departamentos y envia con id
//Routes para Reportes PDF de Programa2
Route::get('listadopdf/{idmespdf}/{iddptopdf}', 'Planificacion\PoiController@pdf')->name('listadopdf');


//Rutas de Configuraciones globales
Route::resource('/departamentos', 'General\DepartamentoController');
Route::get('/listadoDptocreate','General\DepartamentoController@listadoDptocreate')->name('listadoDptocreate');
Route::get('/index','General\DepartamentoController@listadoDptoindex');
Route::resource('/establecimientos', 'General\EstablecimientoController');


//Pruebas 
Route::get('/prodview','General\TestController@prodfunct')->name('prodview');
Route::get('/findProductName','General\TestController@findProductName');
Route::get('/findPrice','General\TestController@findPrice');
Route::get('/fpdf','General\TestController@fpdf')->name('fpdf');


//FPDF
Route::get('/fpdfurl', function () {

    Fpdf::AddPage();
    Fpdf::SetFont('Courier', 'B', 18);
    Fpdf::Cell(50, 25, 'Hello World!');
    $headers=['Content-Type'=>'aplication/pdf'];
    return Response::make(Fpdf::Output(), 200, $headers);

});

//Tipos de rutas
/*Route::get('pruebaA', function () {
    return 'Imprimiendo desde web.php';
});

Route::get('/user', 'UserController@index');

//Esto solamente muestra la vista desde la ruta escrita en la url
/*Route::view('/poi', 'planificacion/poi/index');*/



