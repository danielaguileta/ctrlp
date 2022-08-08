@extends('layouts.app', ['activePage' => 'datos', 'titlePage' => __('Datos de la empresa')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="" autocomplete="off" class="form-horizontal"> 
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Datos de la empresa') }}</h4>
                <p class="card-category">{{ __() }}</p>
              </div>
              <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4 text-center" >
                      
                    </div>
                    <div class="col-md-8">
                      <div class="row">
                        <label class="col-sm-2 col-form-label" for="nombre">{{ __('Nombre') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" id="nombre" type="nombre" placeholder="{{ __('New Password') }}" value="" required />
                            @if ($errors->has('nombre'))
                              <span id="nombre-error" class="error text-danger" for="nombre">{{ $errors->first('nombre') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Direccion') }}</label>
                        <div class="col-sm-7">
                            <textarea id="direccion" name="direccion" rows="2" cols="50" class="form-control" placeholder="{{ __('Direccion') }}"></textarea> 
                            <div class="form-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                            @if ($errors->has('direccion'))
                              <span id="direccion-error" class="error text-danger" for="direccion">{{ $errors->first('direccion') }}</span>
                            @endif
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
        </form>  
        </div>
      </div>
    </div>
  </div>
  
@endsection