<?php
$event = DB::table('events')->where('id', $_GET['id'])->first();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (isset($error))

              <div class="card-header" style="color:orange">{{ $error }}</div>
              @endif
                <div class="card-header">{{ __('Editar evento') }}</div>

                <div class="card-body">
                    <form method="POST" action="/calendar/admin/write_event_data?id={{ $_GET["id"] }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="<?php echo $event->name; ?>" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" name="description" required  ><?php echo $event->description; ?></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" name="address" required ><?php echo $event->address; ?></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>

                            <div class="col-md-6">
                              <?php
                              $date4value = strftime('%Y-%m-%d',strtotime($event->date));
                              ?>
                              <input type="date" name="date" value="<?php echo $date4value; ?>"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Hora') }}</label>

                            <div class="col-md-6">
                              <?php
                              $time4value = strftime('%H:%M:%S',strtotime($event->time));
                              ?>
                              <input type="time" name="time" value="<?php echo $time4value; ?>"  required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifique evento') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
