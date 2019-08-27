<?php
$res = DB::table('entries')
                ->where('id',$_GET['id'])
                ->get()->toArray();
$entry = $res[0];
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diario</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .form_content {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @include('includes/navbar');
      <div class="title m-b-md">
          Modificar entrada de Diario
      </div>


        {{ Form::open(array('url' => 'diary/proc_modform','files' => true)) }}
        <div class='form_content'>

        Título:
        {{ Form::text('title',$entry->title,array('required' => 'required')) }}
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>

        Contenido:
        {{ Form::textarea('content',$entry->content,array('required' => 'required')) }}
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>

        Foto asociada: {{ Form::file('image') }}
        <br>

        Estado de ánimo:
        <?php
          function transform_result2array($result,$key,$value)
          {
            for( $i=0,$obj=$result[0];$i<sizeof($result);$i++){
              $obj=$result[$i];
              $ret[$obj->$key] = $obj->$value;
            }
            return $ret;
          }
          $moods = DB::table('moods')->get();

          $moods_array = transform_result2array($moods,"moods_id","description");
        ?>
        {{ Form::select('moods_id', $moods_array, $entry->moods_id) }}
        {{ Form::hidden('id',$entry->id) }}
        {{ Form::hidden('user_id',$entry->user_id) }}
        <br>

        {{ Form::submit('Enviar') }}

        </div>
        {{ Form::close() }}

    </body>
</html>
