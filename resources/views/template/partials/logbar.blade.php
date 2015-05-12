<link rel="icon" href="favicon.ico"/>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a  class="navbar-brand lora" style="font-size:1.9em;color:black" href="{{route('home')}}"><i class="fa fa-arrow-left"></i> Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse"> 
      <ul class="nav navbar-nav" style="margin:-9px;" >
        <p class="navbar-text lora" style="color:white; font-size:1.8em;">
         <i class="fa fa-dashboard"></i> Admin panel
        </p>
      </ul>
          <ul class="nav navbar-nav navbar-right lora">
            <li><a style="color:black; font-size:1.5em;"href="{{route('nuevo')}}"><i class="fa fa-plus"></i> Crear Contenido</a></li>
            <li class="dropdown">
              <a style="color:black; font-size:1.5em;" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}}<b class="caret"></b></a>
              <ul class="dropdown-menu lora">
                <li><a style="color:black; font-size:1.5em;" href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
              </ul>
            </li>
          </ul>
      </div>
      </div>
</nav>