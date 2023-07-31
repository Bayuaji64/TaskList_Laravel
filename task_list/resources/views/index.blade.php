@extends('layouts.app')

@section('title', 'The List Of Tasks')
    @section('content')
    {{-- <h1>The List of tasks</h1> --}}
        {{-- @if(count($tasks))
      @foreach ($tasks as $task)
      <div>
        <a href="{{route('tasks.show',['id'=> $task->id])}}"> {{$task->title}}</a>
      </div>
          
      @endforeach
        @else
        <div>There are no tasks!</div>
        @endif --}}

        <nav class="mb-4">

          <a href="{{route('tasks.create')}}" class="link">ADD Task!</a>
        </nav>

        @forelse ($tasks as $task)

        <div>
        <a href="{{route('tasks.show',['task'=> $task->id])}}" 
          @class(['line-through' => $task->completed])> 
          {{$task->title}}
        </a>
        </div>
        @empty
         <div>There are no tasks!</div>
            
        @endforelse

        @if ($tasks->count())

        <nav class="mt-4">
          {{$tasks-> links()}}
          
        </nav>


            
        @endif

    @endsection