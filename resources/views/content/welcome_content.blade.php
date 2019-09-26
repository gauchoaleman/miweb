<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth

            @else


                @if (Route::has('register'))

                @endif
            @endauth
        </div>
    @endif

    <div class="content">
      <div class="title m-b-md" style="color:orange">
          Desde tu lugar se puede prevenir<br>
          <img src="/img/autoayuda_portada.jpg">

      </div>

    </div>
</div>
