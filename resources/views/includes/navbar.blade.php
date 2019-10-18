
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://{{$_SERVER['HTTP_HOST']}}">
    <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
      <img src='http://{{$_SERVER['HTTP_HOST']}}/img/home.png'>Home</div></a>&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      @if (Route::has('login'))
      @auth

      <div class="dropdown">
          <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/calendar.png'>Eventos
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/calendar/user/view_events_user"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/future.png'>Futuros</a>
            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/calendar/user/view_events_review_user"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/past.png'>Pasados</a>
          </div>
      </div>
      <?php
      $categories = DB::table('categories')->orderBy('name')->get();
       ?>

      <div class="dropdown">
          <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/documents.png'>Documentos
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($categories as $category)
              <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label"><div class="navbar-brand" style="color:orange">&nbsp;&nbsp;{{ $category->name }}</div></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php $category_documents = DB::table('documents')->where('category_id', $category->id)->get(); ?>
                    @foreach ($category_documents as $category_document)
                       <li>&nbsp;&nbsp;<a target="_blank" href="http://{{$_SERVER['HTTP_HOST']}}/documents/{{ $category_document->title }}.{{ $category_document->extension }}"><div style="color:orange" class="navbar-brand">{{ $category_document->title }}</div></a></li>
                    @endforeach
                  </ul>
              </li>
              @endforeach
          </div>
      </div>

      @if ( (Auth::user()->is_admin == 1) )
      <li class="nav-item active">
        <div class="navbar-brand" >
          <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/admin/view_users_admin">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/user_crud.png'>ABM Usuarios&nbsp;
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item active">
        <div class="navbar-brand" >
          <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/view_events_admin">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/calendar_crud.png'>ABM Eventos&nbsp;
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item active">
        <div class="navbar-brand" >
          <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/categories/admin/view_categories_admin">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/category_crud.png'>ABM Categorías&nbsp;
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item active">
        <div class="navbar-brand" >
          <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/documents/admin/view_documents_admin">
            <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/document_crud.png'>ABM Documentos&nbsp;
            </div>
          </a>
        </div>
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
      <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#F8F8F8';" class="navbar_item">
        <img src='http://{{$_SERVER['HTTP_HOST']}}/img/hello.png'>Hola {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}&nbsp;&nbsp;
      </div>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/logout"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/logout.png'>Logout</a>
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/user/update_data"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/update_data.jpeg'>Actualizar datos</a>
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/user/update_password"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/change_user_password.png'>Actualizar clave</a>
    </div>
</div>
    @else
        <a class="navbar-brand" href="{{ route('login') }}"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/login.png'>Login</a>&nbsp;
        <a class="navbar-brand" href="/auth/user/register"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/register.png'> Registrarse</a>

    </div>
    @endauth
    @endif
</nav>
<br>
