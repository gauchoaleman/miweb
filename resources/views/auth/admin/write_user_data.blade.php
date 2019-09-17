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
<br>
<?php

$name= $_POST['name'];
$email= $_POST['email'];
$id = $_GET["id"];
// Me fijo si ese mail ya está en uso
$users_same_email = DB::table('users')->where([
    ['email', '=', $email],
    ['id', '<>', $id],
])->get();
//print_r($users_same_email);
if( sizeof($users_same_email)){
  $error =  "Este email está en uso";
  ?>@include('auth.admin.forms.change_user_data_form', ['error' => $error])<?php
}
else{
  $res = DB::table('users')
  ->where('id', $id)
  ->update(['name' => $name,'email'=>$email]);

  echo "<div class='high_text'>Datos actualizados</div>";
  ?>@include('auth.admin.tables.view_table')<?php

}
?>
</body>
</html>
