@extends('layouts.app')

@section('content')
    <login-component csrf_token={{ @csrf_token() }}></login-component>
    {{-- <login-component></login-component> --}}
   {{-- <floatlabel-component></floatlabel-component> --}}
@endsection
