@extends('layouts.app')
@section('content')
    <h1>List of Messages</h1>
    @if(count($messages)>0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Contact: {{$message->contact}}</li>
                <li class="list-group-item">Message: {{$message->message}}</li>
                <li class="list-group-item">Created at: {{$message->created_at}}</li>
                <li class="list-group-item">Updated at: {{$message->updated_at}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
@endsection