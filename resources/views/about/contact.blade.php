@extends('layouts.master')

@section('content')

<h1>Contact TODOParrot</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error->name }}</li>
    @endforeach
</ul>


{!! Form::open(['route' => 'contact_store', 'method'=>'post', 'class' => 'form']) !!}
    <div class="form-group">
        {!! Form::label('Your name') !!}
        {!! Form::text('name', null, ['required', 
                                      'class'=>'form-control',
                                      'placeholder'=>'Your name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your E-mail address') !!}
        {!! Form::text('email', null, ['required',
                                       'class'=>'form-control',
                                       'placeholder'=>'Your email-id']) !!}
    </div>

    
    <div class="form-group">
        {!! Form::label('Your message') !!}
        {!! Form::text('message', null, ['required',
                                       'class'=>'form-control',
                                       'placeholder'=>'Your message']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Contact Us!', ['class'=>'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}


@endsection
