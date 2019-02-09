@extends('layouts.layout')

@section('title')
    Project Viewer
@endsection


@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">{{ $project->description }}</div>

    {{-- If there are associated tasks, display them. --}}
    @if ($project->tasks->count())

        <div class="box">
            <ul>
                @foreach ($project->tasks as $task)

                    <form method="POST" action="/completed-tasks/{{ $task->id }}">

                        @if ($task->completed)

                            @method('DELETE')

                        @endif

                        @csrf

                        <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">

                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                            {{ $task->description }}

                        </label>

                    </form>

                @endforeach

            </ul>
        </div>

    @endif

    {{-- Allow the creation of new tasks --}}
    <form class="box" method="POST" action="/projects/{{ $project->id }}/tasks">
        @include('errors')
        @csrf

        <div class="field">
            <label for="description">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="New task" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

    </form>

    <div>
        <br>
        <p>
            <a class="button is-link" href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>
    </div>
@endsection
