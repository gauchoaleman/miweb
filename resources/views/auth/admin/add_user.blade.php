@extends('layouts.app')
@include('includes/navbar')
@section('content')
@include('auth.admin.forms.add_user_form')
@include('includes/bottom_bar')
@endsection
