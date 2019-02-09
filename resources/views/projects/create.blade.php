@extends('layouts.layoutDevFolio')

@section('title')
    Create new project
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
                    <span class="text-slider-items">Create New Project</span>
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
    <h1>Create new project</h1>

    <form method="POST" action="/projects">
      <!-- Create token for Cross Site Request Forgery -->
      @include('errors')
      @csrf

      <div class="field">
          <label class="col-form-label" for="title">Title</label>
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

@endsection
