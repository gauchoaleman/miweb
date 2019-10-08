<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/documents/admin/add_document' ><img src='http://localhost:8000/img/add_document.png'> Agregar documento</a>
    </div>
  </div>
<?php
$documents = DB::table('documents')->
join('categories', 'documents.category_id', '=', 'categories.id')->
select('documents.*', 'categories.name')->
get();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Título</th>
      <th scope="col"  style="color:orange">Categoría</th>
      <th scope="col"  style="color:orange">Fecha / Hora de ingreso</th>
      <th scope="col"  style="color:orange">Borrar</th>
      <th scope="col"  style="color:orange">Editar</th>
    </tr>
  </thead>
  <tbody>
@foreach($documents as $document)
  <tr>
  <td>
  <a target='_blank' href='http://localhost:8000/documents/{{$document->title}}.{{$document->extension}}'>{{$document->title}}</a>
  </td>
  <td>
  {{$document->name}}
  </td>
  <td>
  <?php $date = new DateTime($document->created_at); ?>
  {{$date->format('d/m/Y H:i:s')}}
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/documents/admin/del_document?id={{$document->id}}'><img src='http://localhost:8000/img/delete.png'></a>
  </td>
  <td>
    <a class='card-link' href='http://localhost:8000/documents/admin/change_document_data?id={{$document->id}}'><img src='http://localhost:8000/img/edit.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
