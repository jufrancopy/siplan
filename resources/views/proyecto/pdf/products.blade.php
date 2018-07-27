@extends('pdf.pdf')
@section('content')

     <header class="clearfix">
      <!-- <div id="logo">
        <img src="https://s3-eu-west-1.amazonaws.com/htmlpdfapi.production/free_html5_invoice_templates/example2/logo.png">
      </div> -->
      <div id="company">
        <h2 class="name">Projecto A</h2>
        <div>455 Foggy Heights, AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Proyecto</div>
          <h2 class="name">Consultorio de Pediatria</h2>
          <div class="address">796 Silver Harbour, TX 79273, US</div>
          <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="desc">Nro</th>
            <th class="desc">Item</th>
            <th class="unit">Tipo</th>
            <th class="qty">Costo</th>
            
            
          </tr>
        </thead>
        <tbody>
            <?php $numero = 0; 
            ?>
            @foreach ($items as $item)
         
            <tr>
                <td class="qty">{{ $numero = $numero +1 }}</td>
                <td class="desc"><h3>{{ $item->item}}</h3></td>
                <td class="unit">{{ $item->tipo}}</td>
                <td class="qty">{{ $item->costo}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td></td>
            <td colspan="2">SUBTOTAL</td>
            <td>{{$total}}</td>
          </tr>
          
        </tfoot>
      </table>
      <div id="thanks">Observaciones Finales del Proyecto</div>
      <div id="notices">
        <div>Observaciones:</div>
        <div class="notice">Al termino del proyecto se reinician las cuentas</div>
      </div>
    </main>
    <footer>
      Trabajamos para mejorar
    </footer>
    
@endsection