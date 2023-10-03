@extends('layouts.app')

@section('content')
    <a href="{{route('note.index')}}">Back</a>
    <form method="POST" action="{{route('note.store')}}">
        @csrf
        <label>Title: </label>
        <input name="title" type="text"/>

        <label>Description:</label>
        <input name="description" type="text"/>

        <input type="submit" value="Create">
    </form>
@endsection
