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
                <div class="card-header">{{ __('Actualizar reseña') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'documents/admin/write_document_review?id='.$id)) }}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Reseña') }}</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="40" name="review" required>{{$document->review}}</textarea>


                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualize reseña') }}
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
