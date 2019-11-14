<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (isset($error))

              <div class="card-header" style="color:orange">{{ $error }}</div>
              @endif
                <div class="card-header">{{ __('Agregar categoría') }}</div>

                <div class="card-body">
                    <form method="POST" action="/categories/admin/write_add_category">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar categoría') }}
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
