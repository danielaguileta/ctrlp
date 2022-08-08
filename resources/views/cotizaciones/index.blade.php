@extends('layouts.app', ['activePage' => 'cotizaciones', 'titlePage' => __('Servicios')])

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 @endsection




@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Lista de cotizaciones</h4>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('servicios.create')}}" class="btn btn-sm btn btn-social btn-fill btn-facebook">Nueva cotizacion</a>
                </div>
                <br>
                <br>
            </div>
            <div class="table-responsive">
              <table id="tabla_cotizaciones" class="table table-hover text-nowrap" style="width:100%">
                <thead style="width: 10px">
                  <th> ID</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  <tr>
                  <td></td>
                    <td> 
                      <form action="" class="eliminar" method="post" >
                        <a href="" class="btn btn-warning ">Editar</a>
                        @csrf
                        @method('DELETE')
                       <button type="submit" class="btn btn-danger">Borrar</button>
                      </form>
                    </td>
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

@endsection

 {{--  --------------------------------SCRIPTS ---------------------------------------------  --}}
@Section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="sweetalert2.min.js"></script>
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  $(document).ready(function() {
    $('#tabla_servicios').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
       
    } );
} );
</script>
<script>
  @if(Session::has('eliminado'))
  toastr.options =
  {
  	"closeButton" : false,
  	"progressBar" : true,
    "timeOut" : 3000

  }
  		toastr.error("{{ session('eliminado') }}");
  @endif
</script>

<script>
  @if(Session::has('agregado'))
  toastr.options =
  {
  	"closeButton" : false,
  	"progressBar" : true,
    "timeOut" : 3000

  }
  		toastr.success("{{ session('agregado') }}");
  @endif
</script>


<script>
  $('.eliminar').submit(function(e) {
      e.preventDefault();
      Swal.fire({
          title: 'Estas Seguro?',
          icon: 'warning',
          showCancelButton: true,
          confirmButton: "btn-dialog",
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si',
          cancelButtonText: 'No'
      }).then((result) => {
          if (result.value) {
              this.submit();
          }
      })
  });
</script>
@endsection



