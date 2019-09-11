<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
                font-size: 84px;
            }
            .high_text {
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

<?php

$password = Hash::make($_POST['password']);
$id = $_GET["id"];
if( strlen($_POST['password'])<8){
  echo "<div class='high_text'>La clave tiene menos de 8 caracteres</div>";
  echo "<div class='high_text'><a href='http://localhost:8000/auth/admin/change_user_pass?id=$id'>Click aquí</a> para volver</div>";
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  echo "<div class='high_text'>La confirmación de la clave no coincide con la clave</div>";
  echo "<div class='high_text'><a href='http://localhost:8000/auth/admin/change_user_pass?id=$id'>Click aquí</a> para volver</div>";
}
else{
  $res = DB::table('users')
            ->where('id', $id)
            ->update(['password' => $password]);

  echo "<div class='high_text'>Datos actualizados</div>";
}
 ?>
</body>
</html>
