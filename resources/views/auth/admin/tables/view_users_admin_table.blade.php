<div class="container">

<?php $users = DB::table('users')->get();?>

<div class="card">
  <div class="card-header" style="color:orange">ABM usuarios</div>
  <div class="card-body">

    <div class='row' border-width='1' >
      <div class='col-12' align='right'>
        <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/add_user' ><img src='http://{{$_SERVER['HTTP_HOST']}}/img/add_user.jpeg'> Agregar usuario</a>
      </div>
    </div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col"  style="color:orange">Email</th>
      <th scope="col"  style="color:orange">Fecha / Hora de ingreso</th>
      <th scope="col"  style="color:orange">Editar</th>
      <th scope="col"  style="color:orange">Clave</th>
      <th scope="col"  style="color:orange">Admin</th>
      <th scope="col"  style="color:orange">Enviar mails</th>
      <th scope="col"  style="color:orange">Borrar</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $user)
  <tr>
  <td>
  <a href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/view_user?id={{$user->id}}'>{{$user->name}}</a>
  </td>
  <td>
  {{$user->email}}
  </td>
  <td>
  <?php $date = new DateTime($user->created_at); ?>
  {{$date->format('d/m/Y H:i:s')}}
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/change_user_data?id={{$user->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/edit.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/change_user_pass?id={{$user->id}}'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/change_password.png'></a>
  </td>
  <td>
  @if( $user->is_admin==1 )
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/toggle_admin?id={{$user->id}}&toggle_to=0'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/si.jpg'></a>
  @else
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/toggle_admin?id={{$user->id}}&toggle_to=1'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/no.png'></a>
  @endif
  </td>

  <td>
  @if( $user->send_mail==TRUE )
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/toggle_send_mail?id={{$user->id}}&toggle_to=0'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/si.jpg'></a>
  @else
  <a class='card-link' href='http://{{$_SERVER['HTTP_HOST']}}/auth/admin/toggle_send_mail?id={{$user->id}}&toggle_to=1'><img src='http://{{$_SERVER['HTTP_HOST']}}/img/no.png'></a>
  @endif
  </td>

  <td>
  <a class='card-link' onclick="confirm_del_user({{$user->id}})" href="#"><img src='http://{{$_SERVER['HTTP_HOST']}}/img/delete.png'></a>
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>


</div>
