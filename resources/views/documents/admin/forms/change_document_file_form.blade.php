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
                <div class="card-header">{{ __('Actualizar documento') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'documents/admin/write_document_file?id='.$id,'files' => true)) }}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Archivo') }}</label>

                            <div class="col-md-6">
                                {{ Form::file('file',array('required' => 'required')) }}


                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar documento') }}
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
