function confirm_del_category() {
  var txt;
  if (confirm("¿Está seguro que quiere borrar la categoría? ¡Todos sus documentos se borrarán!")) {
    window.open("http://{{$_SERVER['HTTP_HOST']}}/categories/admin/del_category?id={{$category->id}}");;
  }
}
