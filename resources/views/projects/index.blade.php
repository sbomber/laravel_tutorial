@extends('projects.layouts.layoutBulma')
{{-- @extends('projects.layouts.layoutUikit') --}}

@section('title')
    Display projects
@endsection

@section('content')
<html>
  <head>
    <title>DB Index</title>
  </head>
  <body>
    <h1>Projects</h1>

    <table class="table-bordered">
      <tr>
        <th>Title</th>
        <th>Description</th>
        {{-- <th>Created</th>
        <th>Updated</th> --}}
      </tr>
      @foreach ($projects as $project)
        <tr>
          <td><a href="projects/{{ $project->id }}">{{ $project->title}}</td>
          <td>{{ $project->description}}</td>
          {{-- <td>{{ $project->created_at}}</td>
          <td>{{ $project->updated_at}}</td> --}}
        </tr>
    @endforeach

    </table>
  </body>
</html>

@endsection
