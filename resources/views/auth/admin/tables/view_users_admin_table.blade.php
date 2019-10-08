<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/auth/admin/add_user' ><img src='http://localhost:8000/img/add_user.jpeg'> Agregar usuario</a>
    </div>
  </div>
<?php $users = DB::table('users')->get();?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:orange">Nombre</th>
      <th scope="col"  style="color:orange">Email</th>
      <th scope="col"  style="color:orange">Fecha / Hora de ingreso</th>
      <th scope="col"  style="color:orange">Borrar</th>
      <th scope="col"  style="color:orange">Editar</th>
      <th scope="col"  style="color:orange">Clave</th>
      <th scope="col"  style="color:orange">Admin</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $user)
  <tr>
  <td>
  <a href='http://localhost:8000/auth/admin/view_user?id={{$user->id}}'>{{$user->name}}</a>
  </td>
  <td>
  {{$user->email}}
  </td>
  <td>
  <?php $date = new DateTime($user->created_at); ?>
  {{$date->format('d/m/Y H:i:s')}}
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/auth/admin/del_user?id={{$user->id}}'><img src='http://localhost:8000/img/delete.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/auth/admin/change_user_data?id={{$user->id}}'><img src='http://localhost:8000/img/edit.png'></a>
  </td>
  <td>
  <a class='card-link' href='http://localhost:8000/auth/admin/change_user_pass?id={{$user->id}}'><img src='http://localhost:8000/img/change_password.jpeg'></a>
  </td>
  <td>
  @if( $user->is_admin==1 )
  <a class='card-link' href='http://localhost:8000/auth/admin/toggle_admin?id={{$user->id}}&toggle_to=0'><img src='http://localhost:8000/img/si.jpg'></a>
  @else
  <a class='card-link' href='http://localhost:8000/auth/admin/toggle_admin?id={{$user->id}}&toggle_to=1'><img src='http://localhost:8000/img/no.jpg'></a>
  @endif
  </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
