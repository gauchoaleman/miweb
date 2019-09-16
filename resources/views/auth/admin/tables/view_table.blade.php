<div class="container">
  <div class='row' border-width='1' >
    <div class='col-12' align='right'>
      <a class='card-link' href='http://localhost:8000/auth/admin/add_user' ><img src='http://localhost:8000/img/add_user.jpeg'> Agregar usuario</a>
    </div>
  </div>
<?php

//Select del view, se puede usar para filtros
        $users = DB::table('users')->get();

//Títulos
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha / Hora de ingreso</th>
      <th scope="col">Borrar</th>
      <th scope="col">Editar</th>
      <th scope="col">Clave</th>
      <th scope="col">Admin</th>
    </tr>
  </thead>
  <tbody>
<?php


        foreach ($users as $user) {
          echo "<tr>";
          echo "<td>";
          echo "<a href='http://localhost:8000/auth/admin/view_user?id=".$user->id."'>".$user->name."</a>";
          echo "</td>";
          echo "<td>";
          echo "$user->email</a>";
          echo "</td>";
          echo "<td>";
          $date = new DateTime($user->created_at);
          echo $date->format('d/m/Y H:i:s');
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/auth/admin/del_user?id=".$user->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/auth/admin/change_user_data?id=".$user->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</td>";
          echo "<td>";
          echo "<a class='card-link' href='http://localhost:8000/auth/admin/change_user_pass?id=".$user->id."'><img src='http://localhost:8000/img/change_password.jpeg'></a>";
          echo "</td>";
          echo "<td>";
          if( $user->is_admin==1 ){
            echo "<a class='card-link' href='http://localhost:8000/auth/admin/toggle_admin?id=".$user->id."&toggle_to=0'><img src='http://localhost:8000/img/si.jpg'></a>";
          }
          else {
            echo "<a class='card-link' href='http://localhost:8000/auth/admin/toggle_admin?id=".$user->id."&toggle_to=1'><img src='http://localhost:8000/img/no.jpg'></a>";
          }

          echo "</td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        ?>
</div>
