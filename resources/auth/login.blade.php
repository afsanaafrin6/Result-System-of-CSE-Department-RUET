@extends('layouts.master')

@section('content')

<h2>Login</h2>
{!! Form::open(array('route' => 'handleLogin')) !!}

<div class="form-group">
{!! Form::label('email', 'Email:') !!}
{!! Form::email('email', $value = null, array('class' =>'form-control', 'placeholder'=>'Email')) !!}</div>

<div class="form-group">
{!! Form::label('password', 'Password') !!}<br>
{!! Form::password('password','',array('class'=>'form-control' )) !!}
</div>
{!! Form::token() !!}
{!! Form::submit('Update Profile', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}

@endsection