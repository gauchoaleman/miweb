function confirm_del_category(id) {
  if (confirm("¿Está seguro que quiere borrar la categoría? ¡Todos sus documentos se borrarán!")) {
    window.open("/categories/admin/del_category?id="+id);
  }
}

function confirm_del_user(id) {
  if (confirm("¿Está seguro que quiere borrar el usuario?")) {
    window.open("/auth/admin/del_user?id="+id);
  }
}

function confirm_del_event(id) {
  if (confirm("¿Está seguro que quiere borrar el evento?")) {
    window.open("/calendar/admin/del_event?id="+id);
  }
}

function confirm_del_document(id) {
  if (confirm("¿Está seguro que quiere borrar el documento?")) {
    window.open("/documents/admin/del_document?id="+id);
  }
}

function go_back() {
  window.history.back();
}
