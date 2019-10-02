@include('includes/head')

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$id = Auth::user()->id;

// Me fijo si ese mail ya está en uso
$users_same_email = DB::table('users')->where([
    ['email', '=', $email],
    ['id', '<>', $id],
])->get();

if( sizeof($users_same_email)){
  $error =  "Este email está en uso";
  ?>@include('auth.user.forms.update_data_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name,'email'=>$email]);
  $user = Auth::user();
  $user->name = $name;
  $user->email = $email;
  $user->save();
  $ok=1;
}
?>

@include('includes/navbar')
<?php if(isset($ok)){
  echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
  ?>@include('content/welcome_content')<?php

}?>

@include('includes/bottom_bar')
@include('includes/bottom')
