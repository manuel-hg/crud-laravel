@extends('layouts.app');

@section('content')
    <form method="POST" action="">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{$note->title}}">

        <label>Description:</label>
        <input type="text" name="description" value="{{$note->description}}">

        <input type="submit" value="Update">
    </form>
@endsection
