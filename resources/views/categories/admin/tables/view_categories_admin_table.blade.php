<div class="container">

  <div class="card">
    <div class="card-header" style="color:orange">ABM categorías</div>
    <div class="card-body">

  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/categories/admin/add_category' ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/add_category.jpeg'> Agregar categoría</a>
    </div>
  </div>
<?php $categories = DB::table('categories')->orderBy('name')->get();?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col" style="color:orange">Borrar</th>
      <th scope="col" style="color:orange">Editar</th>
    </tr>
  </thead>
  <tbody>
@foreach($categories as $category)
  <tr>
  <td>
  {{$category->name}}
  </td>
  <td>
  <a class='card-link' onclick="confirm_del_category()" href="#" ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/delete.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/categories/admin/change_category_data?id={{$category->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<script>
function confirm_del_category() {
  var txt;
  if (confirm("¿Está seguro que quiere borrar la categoría? ¡Todos sus documentos se borrarán!")) {
    window.open("http://{{$_SERVER['HTTP_HOST']}}/categories/admin/del_category?id={{$category->id}}");;
  }
}
</script>
