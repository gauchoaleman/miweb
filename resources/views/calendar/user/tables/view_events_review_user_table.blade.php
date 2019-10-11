
<div class="container">

<?php

//Select del view, se puede usar para filtros
        $events = DB::table('events')->whereRaw('date<now()')->where('review','!=','NULL')->orderBy('date', 'asc')->get();

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
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($events as $event) {
          echo "<tr>";
          echo "<td>";
          echo "<a href='http://".$_SERVER['HTTP_HOST']."/calendar/user/view_event_review_user?id=".$event->id."'>".$event->name."</a>";
          echo "</td>";
          echo "<td>";
          echo "$event->description</a>";
          echo "</td>";
          echo "<td>";
          echo "$event->address</a>";
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
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
