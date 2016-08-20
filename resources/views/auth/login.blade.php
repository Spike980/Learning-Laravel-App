@extends('layouts.master')

@section('content')
<div class="col-md-6">
    {!! Form::open(array('url' => '/auth/login', 'class' => 'form')) !!}

    <h1>Sign-In to Your TODOParrot Account</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems signing into your account :
            <ul>
            @foreach($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif


    <div class="form-group">
        {!! Form::label('Your E-mail Address') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'abc@xyz.com']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('Your Password') !!}
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>

    <div class="form-group">
        <label>
            {!! Form::checkbox('remember', 'remember') !!} Remember Me
        </label>
    </div>



    <div class="form-group">
        {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
</div>

@endsection
