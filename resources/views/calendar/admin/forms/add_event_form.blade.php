<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (isset($error))

              <div class="card-header">{{ $error }}</div>
              @endif
                <div class="card-header">{{ __('Agregar evento') }}</div>

                <div class="card-body">
                    <form method="POST" action="/calendar/admin/write_add_event">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" name="description" required></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                              <textarea rows="4" cols="50" name="address" required></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="datetime" class="col-md-4 col-form-label text-md-right">{{ __('Fecha/Hora') }}</label>

                            <div class="col-md-6">
                              <input type="datetime-local" name="datetime" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregue evento') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>