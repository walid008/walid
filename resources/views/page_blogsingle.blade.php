@extends('layouts.master')

@section('content')
    @include('component.nav')
    @include('partials/Page-Blog-single/section1blogsingle')
    @include('partials/Page-Blog-single/section2blogsingle')
    @include('partials/Page-Blog-single/section3blogsingle')
    @include('component/footer')
@endsection