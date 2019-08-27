<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost:8000"><b>Home</b></a>||&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  @if (Route::has('login'))
  @auth
  <div class="navbar-brand" >Hola {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} ||&nbsp; </div>


  <a class="navbar-brand" href="http://localhost:8000/logout">Logout</a>|&nbsp;
  <a class="navbar-brand" href="http://localhost:8000/auth/update_data">Actualizar datos</a>|&nbsp;


    @if ( (Auth::user()->is_admin == 1) )
<a class="navbar-brand" href="http://localhost:8000/auth/view">
      ABM Usuarios|&nbsp;
</a>
    @endif

  @else

  @endauth
  @endif


  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    @if (Route::has('login'))
    @auth




    @else
        <a class="navbar-brand" href="{{ route('login') }}">Login</a>&nbsp;<a class="navbar-brand" href="{{ route('register') }}">|&nbsp;&nbsp; Registrarse</a>
    @endauth
    @endif

  </div>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
