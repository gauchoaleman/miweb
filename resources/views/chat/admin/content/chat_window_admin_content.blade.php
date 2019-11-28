<div id="wrapper">
  <div id="menu">
        <p class="welcome">Hola {{Auth::user()->name}}<b></b></p>
        <p class="logout"><a id="exit" href="/chat/admin/leave_chat">Abandonar Chat</a></p>
        <div style="clear:both"></div>
    </div>

    <div id="chatbox">
    </div>

    <form name="message" action="/chat/admin/chat_post" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Enviar" />
    </form>
</div>

<script type="text/javascript">
wrap_setInterval();
</script>

<script type="text/javascript">
// jQuery Document
$(document).ready(function(){

});




</script>
