
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="http://localhost:8000"><img src='http://localhost:8000/img/home.png'><b>Home</b></a>||&nbsp;


  @if (Route::has('login'))
  @auth
  <div class="navbar-brand" ><img src='http://localhost:8000/img/hello.png'>Hola {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} ||&nbsp; </div>
  <div class="navbar-brand" ><img src='http://localhost:8000/img/calendar.png'><a class="navbar-brand" href="http://localhost:8000/calendar/user/view_events_user">Eventos</a> ||&nbsp; </div>

    @if ( (Auth::user()->is_admin == 1) )
<a class="navbar-brand" href="http://localhost:8000/auth/admin/view">
      <img src='http://localhost:8000/img/user_crud.png'>ABM Usuarios&nbsp;|
</a>
<a class="navbar-brand" href="http://localhost:8000/calendar/admin/view_events">
      <img src='http://localhost:8000/img/calendar_crud.png'>ABM Eventos&nbsp;|
</a>
    @endif

  @endauth
  @endif

    @if (Route::has('login'))
      <div>
    @auth
    <a class="navbar-brand" href="http://localhost:8000/logout"><img src='http://localhost:8000/img/logout.png'>Logout</a>|&nbsp;
    <a class="navbar-brand" href="http://localhost:8000/auth/user/update_data"><img src='http://localhost:8000/img/update_data.jpeg'>Actualizar datos</a>|&nbsp;
    @else
        <a class="navbar-brand" href="{{ route('login') }}"><img src='http://localhost:8000/img/login.png'>Login</a>&nbsp;<a class="navbar-brand" href="{{ route('register') }}">|<img src='http://localhost:8000/img/register.png'> Registrarse</a>
    @endauth
    </div>
    @endif


</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
