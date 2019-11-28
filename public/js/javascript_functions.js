function confirm_del_category(id) {
  if (confirm("¿Está seguro que quiere borrar la categoría? ¡Todos sus documentos se borrarán!")) {
    window.open("/categories/admin/del_category?id="+id,"_self");
  }
}

function confirm_del_user(id) {
  if (confirm("¿Está seguro que quiere borrar el usuario?")) {
    window.open("/auth/admin/del_user?id="+id,"_self");
  }
}

function confirm_del_event(id) {
  if (confirm("¿Está seguro que quiere borrar el evento?")) {
    window.open("/calendar/admin/del_event?id="+id,"_self");
  }
}

function confirm_del_document(id) {
  if (confirm("¿Está seguro que quiere borrar el documento?")) {
    window.open("/documents/admin/del_document?id="+id,"_self");
  }
}

function go_back() {
  window.history.back();
}

function loadLog(){
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: "/log.html",
			cache: false,
			success: function(html){
				$("#chatbox").html(html); //Insert chat log into the #chatbox div

				//Auto-scroll
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}
		  	},
		});
	}

function wrap_setInterval(){
  setInterval(loadLog, 25);
}
