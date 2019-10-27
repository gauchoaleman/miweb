<div class="container">

  <div class="card">
    <div class="card-header" style="color:orange">ABM documentos</div>
    <div class="card-body">

  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/documents/admin/add_document' ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/add_document.png'> Agregar documento</a>
    </div>
  </div>
<?php
$documents = DB::table('documents')->
join('categories', 'documents.category_id', '=', 'categories.id')->
select('documents.*', 'categories.name')->
get();
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Título</th>
      <th scope="col"  style="color:orange">Categoría</th>
      <th scope="col"  style="color:orange">Fecha / Hora de ingreso</th>
      <th scope="col"  style="color:orange">Editar título</th>
      <th scope="col"  style="color:orange">Editar categoría</th>
      <th scope="col"  style="color:orange">Editar archivo</th>
      <th scope="col"  style="color:orange">Editar reseña</th>
      <th scope="col"  style="color:orange">Borrar</th>
    </tr>
  </thead>
  <tbody>
@foreach($documents as $document)
  <tr>
  <td>
  <a target='_blank' href='http://{{$_SERVER['HTTP_HOST']}}/documents/{{$document->title}}.{{$document->extension}}'>{{$document->title}}</a>
  </td>
  <td>
  {{$document->name}}
  </td>
  <td>
  <?php $date = new DateTime($document->created_at); ?>
  {{$date->format('d/m/Y H:i:s')}}
  </td>
  <td>
    <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/documents/admin/change_document_title?id={{$document->id}}'><div align="center"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></div></a>
  </td>
  <td>
    <a align="center" class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/documents/admin/change_document_category?id={{$document->id}}'><div align="center"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></div></a>
  </td>
  <td>
    <a align="center" class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/documents/admin/change_document_file?id={{$document->id}}'><div align="center"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></div></a>
  </td>
  <td>
    <a align="center" class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/documents/admin/change_document_review?id={{$document->id}}'><div align="center"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></div></a>
  </td>
  <td>
  <a class='card-link' onclick="confirm_del_document({{$document->id}})" href="#"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/delete.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
