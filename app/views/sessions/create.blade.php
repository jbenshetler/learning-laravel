@extends('layouts.default')

@section('content')

<h1>Login</h1>
{{ Form::open(['route' => 'sessions.store']) }}
<div>
    {{ Form::label('email', 'Email: ') }}
    {{ Form::email('email') }}
    {{ $errors->first('email','<span class=error>:message</span>') }}
</div>
<div>
    {{ Form::label('Password: ') }}
    {{ Form::password('password') }}
    {{ $errors->first('password','<span class=error>:message</span>') }}
</div>
<div>
    {{ Form::submit('Login'); }}
</div>
{{ Form::close() }}

@stop