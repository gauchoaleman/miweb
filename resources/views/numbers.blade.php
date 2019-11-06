@include('includes/head')
@include('includes/navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div align=center>Números de emergencia</div></div>

                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-2  text-md-right">Bariloche:</div>

                            <div class="col-md-1"  style="color:orange">
                                114
                              <script>if (navigator.userAgent.indexOf('Mobile') !== -1) {
                                document.write("<a href='tel:154301742'><img src='/img/number.png' height=20></a>");
                              }</script>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2  text-md-right">Nacional:</div>

                            <div class="col-md-1"  style="color:orange">
                                110
                              <script>if (navigator.userAgent.indexOf('Mobile') !== -1) {
                                document.write("<a href='tel:154301742'><img src='/img/number.png' height=20></a>");
                              }</script>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/bottom_bar')
@include('includes/bottom')
