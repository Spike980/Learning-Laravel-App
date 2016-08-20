@extends('layouts.master')

@section('content')
        <h1> Lists </h1>
        @if ($lists->count() > 0)
        @foreach ($lists as $list)
            <ul>
                    <li>{{ $list->name }}</li>
            </ul>
        @endforeach
            {!! $lists->render() !!}
        @else
            <p> No Lists found. </p>
        @endif
@endsection


