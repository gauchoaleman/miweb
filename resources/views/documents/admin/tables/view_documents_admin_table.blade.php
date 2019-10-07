<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/documents/admin/add_document' ><img src='http://localhost:8000/img/add_document.png'> Agregar documento</a>
    </div>
  </div>
<?php

//Select del view, se puede usar para filtros
$documents = DB::table('documents')->
join('categories', 'documents.category_id', '=', 'categories.id')->
select('documents.*', 'categories.name')->
get();

//Títulos
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
<?php


        foreach ($documents as $document) {
          echo "<tr>";
          echo "<td>";
          echo "<a target='_blank' href='http://localhost:8000/documents/".$document->title.".".$document->extension."'>".$document->title."</a>";
          echo "</td>";
          echo "<td>";
          echo "$document->name</a>";
          echo "</td>";
          echo "<td>";
          $date = new DateTime($document->created_at);
          echo $date->format('d/m/Y H:i:s');
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/documents/admin/del_document?id=".$document->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/documents/admin/change_document_data?id=".$document->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
