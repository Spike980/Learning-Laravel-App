@extends('layouts.master')

@section('content')

<h1>{{ $list->name }}</h1>

<p>
    Created On: {{ $list->created_at }}
    Last Modified : {{ $list->updated_at }} <br>
</p>

<p>
 {{ $list->description }}
</p>

<h2>Tasks:</h2>

@if ($list->tasks->count() > 0)
    <ul>
        @foreach($list->tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
@else
    <p>
        You haven't created any tasks.
        <a href="{{ URL::route('lists.index') }}">Create a task</a>
    </p>
@endif
@endsection
