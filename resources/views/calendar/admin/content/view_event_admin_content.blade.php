<?php
$event = DB::table('events')->where('id', $_GET['id'])->first();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo $event->name; ?></div>

                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Descripción</div>

                            <div class="col-md-6">
                                <?php echo $event->description; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Dirección</div>

                            <div class="col-md-6">
                                <?php echo $event->address; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Fecha</div>

                            <div class="col-md-6">
                                <?php
                                $date = new DateTime($event->date);
                                echo $date->format('d/m/Y');
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Hora</div>

                            <div class="col-md-6">
                                <?php
                                $time = new DateTime($event->time);
                                echo $time->format('H:i');
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Creado</div>

                            <div class="col-md-6">
                                <?php
                                $created_at = new DateTime($event->created_at);
                                echo $created_at->format('d/m/Y H:i:s');
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
