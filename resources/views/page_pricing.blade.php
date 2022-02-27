@extends('layouts.master')

@section('content')
    @include('component.nav')
    @include('partials/Page-Pricing/section1pricing')
    @include('partials/Page-Pricing/section2pricing')
    @include('partials/Page-Pricing/section3pricing')
    @include('component/footer')
@endsection