<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/calendar/admin/add_event' ><img src='http://localhost:8000/img/add_event.jpeg'> Agregar evento</a>
    </div>
  </div>
<?php $events = DB::table('events')->get(); ?>
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


@foreach($events as $event)
  <tr>
  <td>
  <a href='http://localhost:8000/calendar/admin/view_event_admin?id={{$event->id}}'>{{$event->name}}</a>
  </td>
  <td>
  {{$event->description}}
  </td>
  <td>
  {{$event->address}}
  </td>
  <td>
  <?php $date = new DateTime($event->date); ?>
  {{$date->format('d/m/Y')}}
  </td>
  <td>
  <?php $time = new DateTime($event->time); ?>
  {{$time->format('H:i')}}
  </td>
  <td>
  <?php $created_at = new DateTime($event->created_at); ?>
  {{$created_at->format('d/m/Y H:i:s')}}
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/calendar/admin/del_event?id={{$event->id}}'><img src='http://localhost:8000/img/delete.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/calendar/admin/change_event_data?id={{$event->id}}'><img src='http://localhost:8000/img/edit.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
