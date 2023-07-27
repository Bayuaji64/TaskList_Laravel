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

        @forelse ($tasks as $task)

        <div>
        <a href="{{route('tasks.show',['id'=> $task->id])}}"> {{$task->title}}</a>
        </div>
        @empty
         <div>There are no tasks!</div>
            
        @endforelse

    @endsection