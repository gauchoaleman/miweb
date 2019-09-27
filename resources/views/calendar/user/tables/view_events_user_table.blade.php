
<div class="container">

<?php

//Select del view, se puede usar para filtros
        $events = DB::table('events')->orderBy('datetime', 'asc')->get();

//Títulos
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col" style="color:orange">Descripción</th>
      <th scope="col" style="color:orange">Dirección</th>
      <th scope="col" style="color:orange">Fecha/Hora</th>
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($events as $event) {
          echo "<tr>";
          echo "<td>";
          echo "<a href='http://localhost:8000/calendar/user/view_event_user?id=".$event->id."'>".$event->name."</a>";
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
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
