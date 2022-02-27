@extends('layouts.master')

@section('content')

{{-- Code de base --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






{{-- Code front simple animation --}}
{{-- <div class="main">
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">S'inscrire</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Votre Nom"/>
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Votre Prénom"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Votre Adresse Email"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="N° de Téléphone"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Répétez votre Mot de passe"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="/img/signup-image.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section> --}}










{{-- Code front comme le login design --}}

<!-- Sing in  Form -->
{{-- <section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/img/signin-image.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
</div>
@endsection
