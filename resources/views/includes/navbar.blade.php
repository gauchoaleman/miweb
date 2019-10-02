<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost:8000" style="color:orange"><img src='http://localhost:8000/img/home.png'><b>Home</b></a>&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if (Route::has('login'))
      @auth

      <li class="nav-item active">
        <div class="navbar-brand" ><a class="navbar-brand" style="color:orange" href="http://localhost:8000/calendar/user/view_events_user"><img src='http://localhost:8000/img/calendar.png'>Eventos</a> &nbsp; </div>
      </li>
      <?php
      $categories = DB::table('categories')->get();
       ?>

      <li class="dropdown">
          <a class="navbar-brand" valign="bottom" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src='http://localhost:8000/img/documents.png'>Documentos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php
            foreach ($categories as $category) {
             ?><a class="dropdown-item" style="color:orange" href="http://localhost:8000/documents?category_id=<?php echo $category->id ?>"><?php echo $category->name ?></a>
           <?php } ?>
          </div>
      </li>

      @if ( (Auth::user()->is_admin == 1) )
      <li class="nav-item active">
        <div class="navbar-brand" ><a class="navbar-brand" style="color:orange" href="http://localhost:8000/auth/admin/view_users_admin">
              <img src='http://localhost:8000/img/user_crud.png'>ABM Usuarios&nbsp;</a></div>
      </li>
      <li class="nav-item active">
        <div class="navbar-brand" ><a class="navbar-brand" style="color:orange" href="http://localhost:8000/calendar/admin/view_events_admin">
              <img src='http://localhost:8000/img/calendar_crud.png'>ABM Eventos&nbsp;
        </a></div>
      </li>
      <li class="nav-item active">
        <div class="navbar-brand" ><a class="navbar-brand" style="color:orange" href="http://localhost:8000/categories/admin/view_categories_admin">
              <img src='http://localhost:8000/img/category_crud.png'>ABM Categorías&nbsp;
        </a></div>
      </li>


      @endif

      @endauth
      @endif
    </ul>
    @if (Route::has('login'))
    @auth
      <div>
<div class="dropdown">
    <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src='http://localhost:8000/img/hello.png'>Hola {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" style="color:orange" href="http://localhost:8000/logout"><img src='http://localhost:8000/img/logout.png'>Logout</a>
      <a class="dropdown-item" style="color:orange" href="http://localhost:8000/auth/user/update_data"><img src='http://localhost:8000/img/update_data.jpeg'>Actualizar datos</a>
    </div>
</div>
    @else
        <a class="navbar-brand" href="{{ route('login') }}"><img src='http://localhost:8000/img/login.png'>Login</a>&nbsp;<a class="navbar-brand" href="{{ route('register') }}"><img src='http://localhost:8000/img/register.png'> Registrarse</a>

    </div>
    @endauth
    @endif
</nav>
<br>
