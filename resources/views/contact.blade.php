@extends('layouts.app')
@section('content')
    <h1>Contact Us</h1>
    {!! Form::open(['url' => '/contact/submit']) !!}
    <div class="form-group">
        {{form::label('name','Name')}}
        {{form::text('name','',['class'=>'form-control','placeholder'=>'Please Enter Your Name:'])}}
    </div>
    <div class="form-group">
        {{form::label('email','Email')}}
        {{form::text('email','',['class'=>'form-control','placeholder'=>'Please Enter Your Email:'])}}
    </div>
    <div class="form-group">
        {{form::label('contact','Contact')}}
        {{form::text('contact','',['class'=>'form-control','placeholder'=>'Please Enter Your Contact:'])}}
    </div>
    <div class="form-group">
        {{form::label('message','Message')}}
        {{form::textarea('message','',['class'=>'form-control','placeholder'=>'Please Enter Your Name:'])}}
    </div>
    <div class="form-group">
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection
