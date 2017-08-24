<header>
  <nav class="navbar-inverse navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="{{ route('home') }}"><i class="glyphicon glyphicon-home"></i>Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="{{ route('home') }}"><i class="glyphicon glyphicon-user"></i> Quiénes somos</a></li>
          <li><a href="{{ route('home') }}"><i class="glyphicon glyphicon-earphone"></i> Contáctame</a></li>-->
          <li><a href="{{ route('perfil') }}"><i class="glyphicon glyphicon-log-in"></i> Log In</a></li>
          <li><a href="{{ route('register') }}"><i class="glyphicon glyphicon-check"></i> Registrarse</a></li>


        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
