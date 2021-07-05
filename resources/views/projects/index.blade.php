@extends('layout')
@section('content')
    project index
    <h1> project list</h1>
    @foreach($projectsList as $projectVal)
       Title:{{$projectVal -> title}}<br>
       Description:{{$projectVal -> description}}<br><br>
    @endforeach
@endsection
