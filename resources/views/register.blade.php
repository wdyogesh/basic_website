@extends('layouts.app')
@section('content')
    <h1>Registration</h1>
    <p>Please fill basic information for Signup</p>
    {!!Form::open(['url'=>'/register/submit']) !!}
    <div class="form-group">
        {{form::label('name','Name')}}
        {{form::text('name','',['class'=>'form-control','placeholder'=>'Enter Your First Name.'])}}
    </div>
    <div class="form-group">
        {{form::label('username','Username')}}
        {{form::text('username','',['class'=>'form-control','placeholder'=>'Please Enter Username.'])}}
    </div>
    <div class="form-control">
        {{form::label('gander','Gender')}}
        {{form::radio('gender','Male'),'Male',['class'=>'form-control']}}
        {{form::radio('gender','Female'),'Female',['class'=>'form-control']}}
    </div>

    <div class="form-group">
        {{form::label('state','State')}}
        {{form::text('state','',['class'=>'form-control','placeholder'=>'Enter Your State.'])}}
    </div>

    <div class="form-group">
        {{form::label('city','City')}}
        {{form::text('city','',['class'=>'form-control','placeholder'=>'Enter Your city.'])}}
    </div>
    <div class="form-group">
        {{form::label('pin','pin')}}
        {{form::text('pin','',['class'=>'form-control','placeholder'=>'Enter Your City Pin code.'])}}
    </div>
    <div class="form-group">
        {{form::label('password','Password')}}
        {{form::password('password',['class'=>'form-control','placeholder'=>'Enter Your Password.'])}}
    </div>
    <div class="form-group">
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!!Form::close() !!}
@endsection