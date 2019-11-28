<?php
$document = DB::table('documents')->
             join('categories', 'documents.category_id', '=', 'categories.id')->
             where('documents.id', $_GET['id'])->
             select('documents.*', 'categories.name')->
             first();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo $document->title; ?></div>

                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Categoría</div>

                            <div class="col-md-6" style="text-align:justify">
                                <?php echo $document->name; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right" >Reseña</div>

                            <div class="col-md-6"  style="text-align:justify">
                                <?php echo $document->review; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right" >&nbsp;</div>

                            <div class="col-md-6"  style="text-align:justify">
                                <a target="_blank" href="http://{{$_SERVER['HTTP_HOST']}}/documents/{{ $document->title }}.{{ $document->extension }}">Click para abrir</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
