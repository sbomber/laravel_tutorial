@extends('layouts.layout')

@section('title')
    Edit Project
@endsection

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1rem;">
        @method('PATCH')
        @csrf

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" required
                    placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete</button>
            </div>
        </div>
    </form>
@endsection
