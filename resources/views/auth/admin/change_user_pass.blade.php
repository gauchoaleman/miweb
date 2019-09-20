@extends('layouts.app')
@include('includes/navbar')
@section('content')
@include('auth.admin.forms.change_user_pass_form')
@include('includes/bottom_bar')
@endsection
