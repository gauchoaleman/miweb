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
      <th scope="col" style="color:orange">Editar</th>
      <th scope="col" style="color:orange">Borrar</th>
    </tr>
  </thead>
  <tbody>
@foreach($categories as $category)
  <tr>
  <td>
  {{$category->name}}
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/categories/admin/change_category_data?id={{$category->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></a>
  </td>
  <td>
  <a class='card-link' onclick="confirm_del_category({{$category->id}})" href="#" ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/delete.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
