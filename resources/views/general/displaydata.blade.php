    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->




<body>
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
  </body>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/master.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="{{ asset('js/datatables/dataTables.buttons.min.js')}}" defer></script>      
         <script src="{{ asset('js/datatables/jquery.dataTables.min.js')}}" defer></script>  
    <script src="{{ asset('js/datatables/buttons.flash.min.js')}}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="{{ asset('js/datatables/buttons.html5.min.js')}}" defer></script>
    <script src="{{ asset('js/datatables/buttons.print.min.js')}}" defer></script> 
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
