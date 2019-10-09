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
                <div class="card-header">{{ __('Actualizar categoría') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'documents/admin/write_document_category?id='.$id)) }}
                        @csrf


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                            <div class="col-md-6">
                              <?php
                              $categories = DB::table('categories')->get();
                              $categories_array = transform_result2array($categories,"id","name");
                              ?>
                              {{ Form::select('category_id', $categories_array,$document->category_id) }}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualize categoría') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
