
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

      <div class="dropdown">
          <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src='http://localhost:8000/img/documents.png'>Documentos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($categories as $category)
              <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">{{ $category->name }}</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php $category_documents = DB::table('documents')->where('category_id', $category->id)->get(); ?>
                    @foreach ($category_documents as $category_document)
                       <li><a target="_blank" href="http://localhost:8000/documents/{{ $category_document->title }}.{{ $category_document->extension }}">{{ $category_document->title }}</a></li>
                    @endforeach
                  </ul>
              </li>
              @endforeach
          </div>
      </div>

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
      <li class="nav-item active">
        <div class="navbar-brand" ><a class="navbar-brand" style="color:orange" href="http://localhost:8000/documents/admin/view_documents_admin">
              <img src='http://localhost:8000/img/document_crud.png'>ABM Documentos&nbsp;
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
      <a class="dropdown-item" style="color:orange" href="http://localhost:8000/auth/user/update_password"><img src='http://localhost:8000/img/change_user_password.png'>Actualizar clave</a>
    </div>
</div>
    @else
        <a class="navbar-brand" href="{{ route('login') }}"><img src='http://localhost:8000/img/login.png'>Login</a>&nbsp;
        <a class="navbar-brand" href="/auth/user/register"><img src='http://localhost:8000/img/register.png'> Registrarse</a>

    </div>
    @endauth
    @endif
</nav>
<br>
