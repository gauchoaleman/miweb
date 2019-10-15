<div class="container">
  <div class="card">
    <div class="card-header" style="color:orange">ABM eventos</div>
    <div class="card-body">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/add_event' ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/add_event.jpeg'> Agregar evento</a>
    </div>
  </div>
<?php $events = DB::table('events')->get(); ?>
<table class="table table-striped">
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
      <th scope="col" style="color:orange">Escribir reseña</th>
    </tr>
  </thead>
  <tbody>


@foreach($events as $event)
  <tr>
  <td>
  <a href='http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/view_event_admin?id={{$event->id}}'>{{$event->name}}</a>
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
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/del_event?id={{$event->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/delete.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/change_event_data?id={{$event->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/calendar/admin/event_review?id={{$event->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/review.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
