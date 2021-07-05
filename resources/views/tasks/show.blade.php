@extends('layout')

@section('title','task detail')



@section('content')
 <div class="px-64">
     <div class="flex">
         <h1 class="font-bold text-3xl flex-1"> Tasks detail page </h1>
         <a href="/tasks" class="bg-green-500 hover:bg-green-700"><button>목록으로</button></a>
         <a href="/tasks/{{$taskVals -> id}}/edit"><button class="flex-initial bg-green-500 px-4 py-1 text-white hover:bg-green-700">Edit</button></a>
         <form action="/tasks/{{$taskVals -> id}}" method="post">
             @method('DELETE')
             @csrf
             <button class="flex-initial bg-green-500 px-4 py-1 text-white hover:bg-green-700">Delet</button>
         </form>
     </div>

         Title :  {{$taskVals -> title}}
         <small class="float-right">1.Created at{{$taskVals -> created_at}}</small><br>
         <small class="float-right">2.Updated at{{$taskVals -> updated_at}}</small>
         <label class="block" for="body">Body</label> {{$taskVals -> body}}

         <br>

 </div>
@endsection

