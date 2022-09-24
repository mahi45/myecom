@extends('frontend.layouts.master')

@section('title', 'Home Page')

@section('frontend_content')

    @include('frontend.pages.widgets.slider')

    @include('frontend.pages.widgets.why')

    @include('frontend.pages.widgets.arrival')

    @include('frontend.pages.widgets.product')

@endsection
