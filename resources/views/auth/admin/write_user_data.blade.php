@include('includes/head')
@include('includes/navbar')

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

  echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
  ?>@include('auth.admin.tables.view_users_admin_table')<?php

}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
