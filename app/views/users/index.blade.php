@extends('layouts.default')

@section('content')

        <h1>All Users</h1>
    <ul>
    @foreach ($users as $user)
        <li>{{ link_to("/users/{$user->email}",$user->email) }}</li>
    @endforeach
    </ul>

@stop