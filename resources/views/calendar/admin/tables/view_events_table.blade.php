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
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col" style="color:orange">Descripción</th>
      <th scope="col" style="color:orange">Dirección</th>
      <th scope="col" style="color:orange">Fecha</th>
      <th scope="col" style="color:orange">Hora</th>
      <th scope="col" style="color:orange">Creado</th>
      <th scope="col" style="color:orange">Borrar</th>
      <th scope="col" style="color:orange">Editar</th>
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($events as $event) {
          echo "<tr>";
          echo "<td>";
          echo "<a href='http://localhost:8000/calendar/admin/view_event_admin?id=".$event->id."'>".$event->name."</a>";
          echo "</td>";
          echo "<td>";
          echo "$event->description";
          echo "</td>";
          echo "<td>";
          echo "$event->address";
          echo "</td>";
          echo "<td>";
          $date = new DateTime($event->date);
          echo $date->format('d/m/Y');
          //echo $event->date;
          echo "</td>";
          echo "<td>";
          $time = new DateTime($event->time);
          echo $time->format('H:i');
          echo "</td>";
          echo "<td>";
          $created_at = new DateTime($event->created_at);
          echo $created_at->format('d/m/Y H:i:s');
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/calendar/admin/del_event?id=".$event->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/calendar/admin/change_event_data?id=".$event->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
