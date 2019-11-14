@include('includes/head')
@include('includes/navbar')
<div class="container">
<?php
$user = DB::table('users')->where('id', $_GET['id'])->first();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>

                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Nombre</div>

                            <div class="col-md-6">
                                {{$user->name}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Email</div>

                            <div class="col-md-6">
                                {{$user->email}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Ingreso</div>

                            <div class="col-md-6">
                              <?php $date = new DateTime($user->created_at);?>
                                {{$date->format('d/m/Y H:i:s')}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Administrador</div>

                            <div class="col-md-6">
                              @if( $user->is_admin )
                                Si
                              @else
                                No
                              @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Recibe mails</div>

                            <div class="col-md-6">
                              @if( $user->send_mail )
                                Si
                              @else
                                No
                              @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('includes/bottom_bar')
@include('includes/bottom')
