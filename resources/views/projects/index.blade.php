@extends('layouts.layoutDevFolio')
{{-- @extends('projects.layouts.layout') --}}
{{-- @extends('projects.layouts.layoutUikit') --}}

@section('title')
    Display projects
@endsection

@section('intro')
<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(../../../css/DevFolio/img/overlay-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                {{--
                <p class="display-6 color-d">Hello, world!</p> --}}
                <h1 class="intro-title mb-4">9K Tech, LLC.</h1>
                <p class="intro-subtitle">
                    <span class="text-slider-items">Projects Interface</span>
                    <strong class="text-slider"></strong>
                </p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->
@endsection

@section('content')
    <h1>Projects</h1>

    <table class="display-table"> <!-- table-bordered"> -->
      <tr>
        <th class="table-dark">Title</th>
        <th class="table-dark">Description</th>
        <th class="table-dark">Created</th>
        <th class="table-dark">Updated</th>
      </tr>

      @foreach ($projects as $project)
        @if ( $project->id % 2 === 0)
            <tr class="table-primary">
        @else
            <tr class="table-light">
        @endif

          <td ><a href="projects/{{ $project->id }}">{{ $project->title}}</td>
          <td>{{ $project->description}}</td>
          <td>{{ $project->created_at}}</td>
          <td>{{ $project->updated_at}}</td>
        </tr>
    @endforeach

    </table>

@endsection
