@extends('layout')

@section('title')
   부동산의 신
@endsection

@section('content')
    지도들어감
    <ul>
        @foreach($result as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>

@endsection
