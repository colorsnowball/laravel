@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
 <h1 class="font-bold text-3xl"> Tasks List</h1>
 <a href="/tasks/create"><button class="bg-green-500 hover:green-700">추가 </button> </a>
 <div class="px-64">
     <ul>
         @foreach($tasklist as $task)
             <a href="/tasks/{{$task -> id}}">
             <li class="border m-3">title:{{$task->title}} <small class="float-right">created at{{$task->created_at}}</small></li>
             </a>
         @endforeach
     </ul>
 </div>
@endsection

