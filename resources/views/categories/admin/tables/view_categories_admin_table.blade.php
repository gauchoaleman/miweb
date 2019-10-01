<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/categories/admin/add_category' ><img src='http://localhost:8000/img/add_event.jpeg'> Agregar categoría</a>
    </div>
  </div>
<?php

//Select del view, se puede usar para filtros
        $categories = DB::table('categories')->get();

//Títulos
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col" style="color:orange">Borrar</th>
      <th scope="col" style="color:orange">Editar</th>
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($categories as $category) {
          echo "<tr>";
          echo "<td>";
          echo $category->name;
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/categories/admin/del_category?id=".$category->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/categories/admin/change_category_data?id=".$category->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
