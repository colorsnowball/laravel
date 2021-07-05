@extends('layout')

@section('title','create task')



@section('content')
 <div class="px-64">
 <h1 class="font-bold text-3xl"> Tasks Update page </h1>
     <form action="/tasks/{{$taskVal -> id}}" method="post">
         @method('PUT')
         @csrf
         <label class="block" for="title">Title</label>
         <input class="border-2 border-gray-800 w-full" type="text" name="title" id="title" value="{{ old('title')?old('title'):$taskVal -> title}}" required>
          @error('title')
           {{$message}}
          @enderror
         <label class="block" for="body">Body</label>
         <textarea class="border-2 border-gray-800 w-full"  name="body" id="body" cols="30" rows="10" required>{{old('body')?old('body'):$taskVal -> body}}</textarea>
         <br>
         <button  class="bg-blue-100 text-white px-4 py-2 float-right">submit</button>
     </form>



 </div>
@endsection

