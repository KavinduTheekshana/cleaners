@extends('layouts.frontend')

@section('content')
    @include('frontend.home.slider')
    @include('frontend.home.services')
    @include('frontend.home.pricing')
    @include('frontend.home.about')
    @include('frontend.home.testimonial')
    @include('frontend.home.count')

@endsection
