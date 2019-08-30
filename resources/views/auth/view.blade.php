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

      <div class="navbar-brand">
          Ver entradas
      </div>



<?php

//Select del view, se puede usar para filtros
        $users = DB::table('users')->get();

//Títulos

echo "<div class='row' border-width='1' >";
echo "<div class='col-2' align='center'>";

echo "Nombre";
echo "</div>";
echo "<div class='col-3' align='center'>";
echo "Email";
echo "</div>";
echo "<div class='col-3 ' align='center'>";
echo "Fecha / Hora";
echo "</div>";
echo "<div class='col-1' align='center'>";
echo "Borrar";
echo "</div>";
echo "<div class='col-1' align='center'>";
echo "Editar";
echo "</div>";
echo "<div class='col-1' align='center'>";
echo "Admin <br>(Click para cambiar)";
echo "</div>";
echo "</div>";


        foreach ($users as $user) {
          echo "<div class='row'>";
          echo "<div class='col-2'>";

          echo "<a href='http://localhost:8000/auth/view_user?id=".$user->id."'>".$user->name."</a>";
          echo "</div>";
          echo "<div class='col-3'>";
          echo "$user->email</a>";
          echo "</div>";
          echo "<div class='col-3'>";
          $date = new DateTime($user->created_at);
          echo $date->format('d/m/Y H:i:s');
          echo "</div>";
          echo "<div class='col-1'>";
          echo "<a class='card-link' href='http://localhost:8000/auth/del_user?id=".$user->id."'><img src='http://localhost:8000/img/delete.png'></a>";
          echo "</div>";
          echo "<div class='col-1'>";
          echo "<a class='card-link' href='http://localhost:8000/auth/mod_user?id=".$user->id."'><img src='http://localhost:8000/img/edit.png'></a>";
          echo "</div>";
          echo "<div class='col-1'>";
          if( $user->is_admin==1 ){
            echo "<a class='card-link' href='http://localhost:8000/auth/toggle_admin?id=".$user->id."&toggle_to=0'>Si</a>";
          }
          else {
            echo "<a class='card-link' href='http://localhost:8000/auth/toggle_admin?id=".$user->id."&toggle_to=1'>No</a>";
          }

          echo "</div>";
          echo "</div>";

        }
        echo "</div>";

        ?>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
