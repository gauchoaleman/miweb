@include('includes/head')
@include('includes/navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Números de emergencia</div>

                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Bariloche:</div>

                            <div class="col-md-1"  style="color:orange">
                                114
                            </div>
                            <div class="col-md-1"  align=left>
                                <img src="/img/number.png" height=20>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4  text-md-right">Nacional:</div>

                            <div class="col-md-1"  style="color:orange">
                                110
                            </div>
                            <div class="col-md-1" align=left>
                                <img src="/img/number.png" height=20>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/bottom_bar')
@include('includes/bottom')
