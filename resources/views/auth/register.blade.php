@extends('layouts.master')

@section('content')
<div class="col-md-6">
    {!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}

    <h1>Create A TODOParrot Account</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems creating account :
            <ul>
            @foreach($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('name', 'Your name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Your E-mail Address') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'abc@xyz.com']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('Your Password') !!}
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('Confirm Password') !!}
        {!! Form::text('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create Account', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
</div>

@endsection
