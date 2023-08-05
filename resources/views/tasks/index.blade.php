@extends('layouts.default')

@section('content')
    <h2>All tasks</h2>
    @include('common.errors')
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <label for="#"> name:
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <input type="submit">
    </form>
    <!--TODO table with tasks-->
@endsection
