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
                <div class="card-header">{{ __('Escribir reseña') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'calendar/admin/write_event_review?id='.$_GET['id'],'files' => true)) }}
                        @csrf

                        <div class="form-group row">
                            <label for="review" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="45" name="review" required>{{$event->review}}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Foto 1') }}</label>

                            <div class="col-md-6">
                                {{ Form::file('pic1') }}

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Foto 2') }}</label>

                            <div class="col-md-6">
                                {{ Form::file('pic2') }}

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">&nbsp;</label>

                            <div class="col-md-6">
                                <a href="/calendar/admin/del_event_pictures?id={{$_GET['id']}}">Borrar fotos</a>

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envíe reseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
