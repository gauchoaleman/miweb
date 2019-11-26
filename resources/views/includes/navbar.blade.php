<?php if( !isset($there_is_error)) $there_is_error=FALSE; ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
  <a class="navbar-brand" href="http://{{$_SERVER['HTTP_HOST']}}">
    <div
    @if( where_i_am($there_is_error)=="Home")
      class="active_navbar_item"
    @else
      onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
    @endif
    >
      <img src='http://{{$_SERVER['HTTP_HOST']}}/img/home.png'>Home</div></a>&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <div class="dropdown">
          <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div
            @if( where_i_am($there_is_error)=="Calendar")
              class="active_navbar_item"
            @else
              onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
            @endif
            >
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/calendar.png'>Eventos

              @if( week_event() )
                &nbsp;(!)
              @endif

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
            <div
            @if( where_i_am($there_is_error)=="Documents")
              class="active_navbar_item"
            @else
              onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
            @endif
            >              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/documents.png'>Documentos
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($categories as $category)
              <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label"><div class="navbar-brand" style="color:orange">&nbsp;&nbsp;{{ $category->name }}</div></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php $category_documents = DB::table('documents')->where('category_id', $category->id)->get(); ?>
                    @foreach ($category_documents as $category_document)
                       <li><a href="/documents/user/show_document_user?id={{ $category_document->id }}"><div style="color:orange" class="navbar-brand">{{ $category_document->title }}</div></a></li>
                    @endforeach
                    @if (!sizeof($category_documents))
                       <li>&nbsp;</li>
                    @endif
                  </ul>
              </li>
              @endforeach
          </div>
      </div>
      <a class="navbar-brand" href="http://{{$_SERVER['HTTP_HOST']}}/numbers">
        <div
        @if( where_i_am($there_is_error)=="Numbers")
          class="active_navbar_item"
        @else
          onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
        @endif
        >
          <img src='http://{{$_SERVER['HTTP_HOST']}}/img/number.png'>Nros. de emergencia</div></a>&nbsp;
@if (Auth::user() && Auth::user()->is_admin != 1)
          <a target="_blank" class="navbar-brand" href="http://{{$_SERVER['HTTP_HOST']}}/chat/user/chat_window_user">
            <div
            @if( where_i_am($there_is_error)=="UserChat")
              class="active_navbar_item"
            @else
              onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
            @endif
            >
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/chat.png'>Chat</div></a>&nbsp;
@endif

@if (Auth::user() && Auth::user()->is_admin == 1)
          <a target="_blank" class="navbar-brand" href="http://{{$_SERVER['HTTP_HOST']}}/chat/admin/chat_window_admin">
            <div
            @if( where_i_am($there_is_error)=="UserChat")
              class="active_navbar_item"
            @else
              onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
            @endif
            >
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/chat.png'>Disponible Chat</div></a>&nbsp;
@endif
      @auth
      @if ( (Auth::user()->is_admin == 1) )

      <div class="dropdown">
          <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div
            @if( where_i_am($there_is_error)=="Configuration")
              class="active_navbar_item"
            @else
              onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
            @endif
            >
            <img src='http://{{$_SERVER['HTTP_HOST']}}/img/configuration.png'>Configuración
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/view_events_admin">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/calendar_crud.png'>Eventos&nbsp;
            </a>

            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/admin/view_users_admin">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/user_crud.png'>Usuarios&nbsp;
            </a>

            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/categories/admin/view_categories_admin">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/category_crud.png'>Categorías&nbsp;
            </a>

            <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/documents/admin/view_documents_admin">
              <img src='http://{{$_SERVER['HTTP_HOST']}}/img/document_crud.png'>Documentos&nbsp;
            </a>

          </div>
      </div>

      <div
      @if( where_i_am($there_is_error)=="SendMail")
        class="active_navbar_item"
      @else
        onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
      @endif
      >
          <a class="navbar-brand" href="/mail/admin/mail_form" style="color:orange"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/send_mail.png'>Enviar mail a todos</a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      @endif
      @endauth


    </ul>
    @if (Route::has('login'))
    @auth

@if ( (Auth::user()->is_admin == 1) )
<!-- <div
@if( where_i_am($there_is_error)=="Chat")
  class="active_navbar_item"
@else
  onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
@endif
>
<a class="navbar-brand" href="/chat"><div class="tab blink" style="color:orange"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/chat.png'>Chat</div></a>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
@endif


<div class="dropdown">
    <a class="navbar-brand" style="color:orange" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div
      @if( where_i_am($there_is_error)=="Hello")
        class="active_navbar_item"
      @else
        onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
      @endif
      >        <img src='http://{{$_SERVER['HTTP_HOST']}}/img/hello.png'>Hola {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}&nbsp;&nbsp;
      </div>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/logout"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/logout.png'>Logout</a>
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/user/update_data"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/update_data.jpeg'>Actualizar datos</a>
      <a class="dropdown-item" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/auth/user/update_password"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/change_user_password.png'>Actualizar clave</a>
    </div>
</div>



    @else
    <div
    @if( where_i_am($there_is_error)=="Login")
      class="active_navbar_item"
    @else
      onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
    @endif
    >
        <a class="navbar-brand" href="{{ route('login') }}"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/login.png'>Login</a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div
        @if( where_i_am($there_is_error)=="Register")
          class="active_navbar_item"
        @else
          onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='white';" class="navbar_item"
        @endif
        >
        <a class="navbar-brand" href="/auth/user/register"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/register.png'> Registrarse</a></div>


    @endauth
    @endif
</nav>
<div  id="home_gradient" style="min-height:795px">
<br>
