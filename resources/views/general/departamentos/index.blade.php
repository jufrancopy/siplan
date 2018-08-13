@extends('layouts.master')
@section('content')
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

  <div class="container">
    <h2>Listado de Departamentos</h2>
      <table id="example" class="display" style="width:100%">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nombre</th>
               <th>Capital</th>
               <th>Población</th>
            </tr>
         </thead>
      </table>
    </div>

<script>
         $(function() {
               $('#example').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('index') }}',
               dom: 'Bfrtip',
               buttons: [
                        { extend:'copy', attr: { id: 'id' } }, 'csv', 'excel', 'pdf', 'print'
                    ], 
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'nombre', name: 'nombre' },
                        { data: 'capital', name: 'capital' },
                        { data: 'poblacion', name: 'poblacion' }
                     ]
            });

         });
</script>
@endsection