@extends('layouts.master')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="index.html">Societe</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="active " href="index.html">Home</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>

                @guest
                <li><a href="{{ route('login') }}">{{ ('Login') }}</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ ('Register') }}</a></li>
                @endif
                @else
                <li>
                    <a class=" text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endguest





            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@include('component.footer')
@endsection