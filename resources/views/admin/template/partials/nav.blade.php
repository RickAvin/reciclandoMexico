
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if(Auth::user())
      <ul class="nav navbar-nav">
            <li><a href="{{route('empresa.index')}}">Empresas</a></li>
            <li><a href="{{route('tecnico.index')}}">Tecnicos</a></li>
            <li><a href="{{route('maquina.index')}}">Maquinas</a></li>
            <li><a href="{{route('pieza.index')}}">Piezas</a></li>
            <li><a href="{{route('mantenimiento.index')}}">Mantenimientos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('cita.index')}}">Citas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('reparacion.index')}}">Reparacion</a></li>
    @endif   
          
            
        
      </ul>
      
     <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>