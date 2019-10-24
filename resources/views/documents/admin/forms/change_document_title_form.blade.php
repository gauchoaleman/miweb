<?php
$document = DB::table('documents')->where('id', $_GET['id'])->first();
$id = $_GET["id"];
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (isset($error))

              <div class="card-header" style="color:orange">{{ $error }}</div>
              @endif
                <div class="card-header">{{ __('Actualizar título') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'documents/admin/write_document_title?id='.$id)) }}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Título (solo letras y números)') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{$document->title}}" required autocomplete="title" autofocus>


                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualize título') }}
                                </button>
                                <button type="cancel" class="btn btn-primary" onclick="go_back()">
                                  Cancelar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
