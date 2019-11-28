@include('includes/head')
@include('includes/navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estás logueado!

                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/bottom_bar')
@include('includes/bottom')
