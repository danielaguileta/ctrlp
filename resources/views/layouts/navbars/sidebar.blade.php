<div class="sidebar" data-color="red" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('CTRL+P') }}

    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#personas" aria-expanded="false">
          <i class="material-icons">people_alt</i>
          <p>{{ __('Personas') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' show' : '' }}" id="personas">
          <ul class="nav" >
            <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}" >
              <a class="nav-link" href="#" aria-expanded="true">
               <span class="sidebar-mini">U</span>
                <span class="sidebar-normal">{{ __('Usuarios') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'empleados' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">E</span>
                <span class="sidebar-normal"> {{ __('Empleados') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">C</span>
                <span class="sidebar-normal"> {{ __('Clientes') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'proveedores' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">P</span>
                <span class="sidebar-normal"> {{ __('Proveedores') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#nomina" aria-expanded="false">
          <i class="material-icons">account_balance</i>
          <p>{{ __('Nomina') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'profile' || $activePage == 'user-management') ? ' show' : '' }}" id="nomina">
          <ul class="nav" >
            <li class="nav-item{{ $activePage == 'nomina' ? ' active' : '' }}" >
              <a class="nav-link" href="#" aria-expanded="true">
               <span class="sidebar-mini">D</span>
                <span class="sidebar-normal">{{ __('Departamentos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'nomina2' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">P</span>
                <span class="sidebar-normal"> {{ __('Puestos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'nomina2' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">TC</span>
                <span class="sidebar-normal"> {{ __('Tipo Contrato') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#inventario" aria-expanded="false">
          <i class="material-icons">inventory</i>
          <p>{{ __('Inventario') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'profile' || $activePage == 'user-management') ? ' show' : '' }}" id="inventario">
          <ul class="nav" >
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}" >
              <a class="nav-link" href="#" aria-expanded="true">
               <span class="sidebar-mini">C</span>
                <span class="sidebar-normal">{{ __('Categorias') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">M</span>
                <span class="sidebar-normal"> {{ __('Medidas') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">M</span>
                <span class="sidebar-normal"> {{ __('Productos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'compras' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('compras.index')}}">
          <i class="material-icons">shopping_cart</i>
            <p>{{ __('Compras') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'venta' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">point_of_sale</i>
            <p>{{ __('Ventas') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false">
          <i class="material-icons">summarize</i>
          <p>{{ __('Reportes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' show' : '' }}" id="reportes">
          <ul class="nav" >
            <li class="nav-item{{ $activePage == 'empleados' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">V</span>
                <span class="sidebar-normal"> {{ __('Ventas') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">C</span>
                <span class="sidebar-normal"> {{ __('Compras') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'proveedores' ? ' active' : '' }}">
              <a class="nav-link"href="#">
                <span class="sidebar-mini">I</span>
                <span class="sidebar-normal"> {{ __('Inventario') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#config" aria-expanded="false">
          <i class="material-icons">settings</i>
          <p>{{ __('Configuracion') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'usuarios' || $activePage == 'empleados') ? ' show' : '' }}" id="config">
          <ul class="nav" >
            <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}" >
              <a class="nav-link" href="#" aria-expanded="true">
               <span class="sidebar-mini">D</span>
                <span class="sidebar-normal">{{ __('Datos Empresa') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'empleados' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">R</span>
                <span class="sidebar-normal"> {{ __('Roles') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini">P</span>
                <span class="sidebar-normal"> {{ __('Permisos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
    
  </div>
</div>
