@extends('projects.layouts.layout')

@section('title')
    Create new project
@endsection

@section('content')
<html>
  <head>
    <title>Create project</title>
  </head>
  <body>
    <h1>Create new project</h1>

    <form method="POST" action="/projects">
      <!-- Create token for Cross Site Request Forgery -->
      @include('errors')
      @csrf

      <div class="field">
          <label class="label" for="title">Title</label>
          <div class="control">
              <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                name="title" placeholder="Title" value="{{ old('title') }}" required>
          </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
          <div class="control">
              <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Description"
                required>{{ old('description') }}</textarea>
          </div>
    </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

    </form>
  </body>
</html>

@endsection
