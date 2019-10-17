
<div class="container">

<?php $events = DB::table('events')->whereRaw('date>=now()')->orderBy('date', 'asc')->get(); ?>

<div class="card">
  <div class="card-header" style="color:orange">Eventos futuros</div>
  <div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col" style="color:orange">Dirección</th>
      <th scope="col" style="color:orange">Fecha</th>
      <th scope="col" style="color:orange">Hora</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($events as $event)
          <tr>
          <td>
          <a href='http://{{$_SERVER['HTTP_HOST']}}/calendar/user/view_event_user?id={{$event->id}}'>{{$event->name}}</a>
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
          </tr>
        @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
