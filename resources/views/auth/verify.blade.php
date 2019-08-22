@extends('layouts.app')
@include('includes/navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificación ha sido enviado a su email.') }}
                        </div>
                    @endif

                    {{ __('Antes de procedes, revise su email para el link de verificación.') }}
                    {{ __('Si no ha recibido el email') }}, <a href="{{ route('verification.resend') }}">{{ __('clik aquí para pedir otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
