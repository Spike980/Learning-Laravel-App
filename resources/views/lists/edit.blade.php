@extends('layouts.master')

@section('content')

<h1></h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::model($list, ['method'=>'put', 'route'=>['lists.update', $list->id], 'class'=>'form']) !!}
<div class="form-group">
    {!! Form::label('List Name') !!}
    {!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'San Juan Vacation']) !!}
</div>

<div class="form-group">
    {!! Form::label('List Description') !!}
    {!! Form::text('description', null, ['required', 'class'=>'form-control', 'placeholder'=>'Things to do before leaving for vacation']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Create List', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

{!! Form::open(['route'=>['lists.destroy', $list->id], 'method' => 'DELETE']) !!}
    <button type="submit">Delete List</button>
{!! Form::close() !!}
@stop


