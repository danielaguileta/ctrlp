@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('Registrar servicio')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('servicios.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Agregar servicios') }}</h4>
                <p class="card-category">{{ __() }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" id="nombre" type="text" placeholder="{{ __('Nombre') }}" value="{{ old('nombre')}}" required="true" aria-required="true"/>
                      @if ($errors->has('nombre'))
                        <span id="nombre-error" class="error text-danger" for="nombre">{{ $errors->first('nombre') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Descripcion') }}</label>
                    <div class="col-sm-7">
                        <textarea id="descripcion" name="descripcion" rows="2" cols="50" class="form-control" placeholder="{{ __('Descripcion') }}"></textarea> 
                        <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                        @if ($errors->has('descripcion'))
                          <span id="descripcion-error" class="error text-danger" for="descripcion">{{ $errors->first('descripcion') }}</span>
                        @endif
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Precio 1') }}</label>
                    <div class="col-sm-2">
                      <div class="form-group{{ $errors->has('precio1') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('precio1') ? ' is-invalid' : '' }}" name="precio1" id="precio1" type="number" placeholder="{{ __('Precio1') }}" value="{{ old('precio1') }}" required />
                        @if ($errors->has('precio1'))
                          <span id="precio1-error" class="error text-danger" for="precio1">{{ $errors->first('precio1') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Precio 2') }}</label>
                    <div class="col-sm-2">
                      <div class="form-group{{ $errors->has('precio2') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('precio2') ? ' is-invalid' : '' }}" name="precio2" id="precio2" type="number" placeholder="{{ __('Precio2') }}" value="{{ old('precio2') }}" required />
                        @if ($errors->has('precio2'))
                          <span id="precio2-error" class="error text-danger" for="precio2">{{ $errors->first('precio2') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Precio 3') }}</label>
                    <div class="col-sm-2">
                      <div class="form-group{{ $errors->has('precio3') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('precio3') ? ' is-invalid' : '' }}" name="precio3" id="precio3" type="number" placeholder="{{ __('Precio3') }}" value="{{ old('precio3') }}" required />
                        @if ($errors->has('precio3'))
                          <span id="precio3-error" class="error text-danger" for="precio3">{{ $errors->first('precio3') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>   
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-social btn-fill btn-facebook">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
@endsection