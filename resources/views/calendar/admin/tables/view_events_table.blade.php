<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/calendar/admin/add_event' ><img src='http://localhost:8000/img/add_event.jpeg'> Agregar evento</a>
    </div>
  </div>
<?php

//Select del view, se puede usar para filtros
        $events = DB::table('events')->get();

//Títulos
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Dirección</th>
      <th scope="col">Fecha/Hora</th>
      <th scope="col">Creado</th>
      <th scope="col">Borrar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($events as $event) {
          echo "<tr>";
          echo "<td>";
          echo "<a href='http://localhost:8000/calendar/admin/view_event?id=".$event->id."'>".$event->name."</a>";
          echo "</td>";
          echo "<td>";
          echo "$event->description</a>";
          echo "</td>";
          echo "<td>";
          echo "$event->address</a>";
          echo "</td>";
          echo "<td>";
          $datetime = new DateTime($event->datetime);
          echo $datetime->format('d/m/Y H:i:s');
          echo "</td>";
          echo "<td>";
          $created_at = new DateTime($event->created_at);
          echo $created_at->format('d/m/Y H:i:s');
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/auth/admin/del_user?id=".$event->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/auth/admin/change_user_data?id=".$event->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
