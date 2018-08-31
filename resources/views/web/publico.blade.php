@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2"></div>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bienvenidos a SIPLAN
        <small>Version 1.0</small>
      </h1>
     
    </section>
   


    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        
          <div class="col-md-2 col-sm-6 col-xs-12" >
            <div id=contenedorico>
              <p id="tituloico">Hospitales</p>
              <span class="iconheader-h" ></span>
              <p id="bordecontador">{{$th}}</p>
            </div>
          </div>
        

        <!-- /.Hospitales -->
        
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div id=contenedorico>
              <p id="tituloico">Hospitales Regionales</p>
              <span class="iconheader-hr" ></span>
              <p id="bordecontador">{{$thr}}</p>
            
          </div>
        </div>
        <!-- /.Hospitales Regionales -->

        
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div id=contenedorico>
              <p id="tituloico">Unidad Sanitaria</p>
              <span class="iconheader-us" ></span>
             <p id="bordecontador"> {{$tus}}</p> 
            
          </div>
        </div>
        <!-- /.Unidades Sanitarias -->

        <div class="col-md-2 col-sm-6 col-xs-12">
          <div id=contenedorico>
              <p id="tituloico">Clínica Periférica</p>
            
              <span class="iconheader-cp" ></span>
              <p id="bordecontador"> {{$tcp}}</p> 
            
          </div>
        </div>
      <!-- /.Clinicas Perifericas -->

      <div class="col-md-2 col-sm-6 col-xs-12">
          <div id=contenedorico>
              <p id="tituloico">Puesto de Salud</p>
              <span class="iconheader-ps" ></span>
              <p id="bordecontador">{{$tps}}</p>  
            </div>
          
        </div>
      <!-- /.Puestos Sanitarios -->

       <div class="col-md-2 col-sm-6 col-xs-12">
          <div id=contenedorico>
              <p id="tituloico">Convenios</p>
              <span class="iconheader-cn" ></span> 

              <p id="bordecontador">{{$tc}}</p> 
            
          </div>
        </div>
      <!-- /.Puestos Sanitarios -->

    

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
         <!-- TABLE: LATEST ORDERS --> 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dependencias de Salud del Paraguay</h3>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Nivel</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($establecimientos as $establecimiento)
                  <tr>
                    <td>{{$establecimiento->departamento->nombre}}</td>
                    <td>{{$establecimiento->ciudad->nombre}}</td>
                    @switch($establecimiento->nivel->nombre)
                                @case('Hospital')
                                    <td><span class="icon-h" ></span></td>
                                    @break

                                @case('Hospital Regional')
                                    <td><span class="icon-hr" ></span></td>
                                    @break

                                @case('Unidad Sanitaria')
                                    <td><span class="icon-us" ></span></td>
                                    @break                                    
                                 @case('Clinica Periferica')
                                 <td><span class="icon-cp" ></span></td>
                                    @break
                                 @case('Convenio')
                                 <td><span class="icon-c" ></span></td>
                                    @break   

                                @default
                                    <td>Sin Nivel</td>
                            @endswitch
                        @switch($establecimiento->tipo)
                            @case('propios')
                                <td>Propios</td>
                                @break

                            @case('convenios')
                                <td>Convenios</td>
                                @break
                            @case('tercerizados')
                                <td>Tercerizados</td>
                                @break                                    

                            @default
                                <td>Sin tipo</td>
                        @endswitch
                    <td>{{$establecimiento->cantidad}}</td>
                        @endforeach

                    <!-- <td><i class="fa fa-2x">&#x26EA;</i></td> -->
                   <!--  <td><span class="icon-ps"></span></td> -->
                   <!-- <td><span class="icon-ps" ></span>
                   </td> -->
                   </tr>
                 </tbody>
               </table>
                <tfoot>
                  {{$establecimientos->render()}}
                </tfoot>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Ver Todo</a>
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
              <b>Cumplimiento de Objetivos Institucionales</b>
            <div class="info-box-content">
              <span class="info-box-text">Objetivo 1</span>
              <span class="info-box-number">4</span>

              <div class="progress">
                <div class="progress-bar" style="width: 51%"></div>
              </div>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->


          
              </ul>
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection