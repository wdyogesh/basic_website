@extends('layouts.app')
@section('content')
    <h1>Home</h1>
@endsection

@section('sidebar')
    @parent
    {{--parent goes here  --}}
    <p>This is appended sidebar goes here !!</p>
@endsection
