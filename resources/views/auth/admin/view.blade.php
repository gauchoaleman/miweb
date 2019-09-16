<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Autoayuda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .form_content {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @include('includes/navbar')
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
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
