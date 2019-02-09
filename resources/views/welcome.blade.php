@extends('layouts.layoutDevFolio')

@section('title')
    9K Tech Projects
@endsection

@section('intro')
<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(../../../css/DevFolio/img/overlay-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                {{-- <p class="display-6 color-d">Hello, world!</p> --}}
                <h1 class="intro-title mb-4">9K Tech, LLC.</h1>
                <p class="intro-subtitle">
                    <span class="text-slider-items">Software Consulting</span>
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
    <h2>Welcome to 9K Tech's projects interface.</h2>
@endsection
