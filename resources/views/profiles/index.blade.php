@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="card w-100">
            <div class="card-header">
                List Of Users
            </div>
            <ul class="list-group list-group-flush">
                @foreach($users as $user)
                    <li class="list-group-item"><a href="{{route('profile', ['username' => $user->username])}}">{{$user->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection