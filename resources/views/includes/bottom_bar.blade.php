<?php if( !isset($there_is_error)) $there_is_error=FALSE; ?>
<br>
@if( where_i_am(FALSE)=="Home")
</div>
@endif
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d2d8d8;">
  <div
  @if( where_i_am($there_is_error)=="Contact")
    class="active_navbar_item"
  @else
    onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#d2d8d8';" class="navbar_item"
  @endif
  >    <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}/contact/contact"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/contact.png'>Contacto</a>&nbsp;
  </div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#d2d8d8';" class="navbar_item">
    <a class="navbar-brand" style="color:orange" href="http://{{$_SERVER['HTTP_HOST']}}"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/download_app.png'>Bajar App</a>&nbsp;
  </div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div onmouseover="this.style.background='#ffdca4';" onmouseout="this.style.background='#d2d8d8';" class="navbar_item" align=center>
    <a class="navbar-brand" target="_blank" style="color:orange" href="http://www.autolesion.com"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/autolesion.png'>Sociedad internacional de autolesión</a>
  </div>
</nav>
