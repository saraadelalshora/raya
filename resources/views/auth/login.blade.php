@include('tamplete.partains.header')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">تسجيل دخول </h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="{{route('home')}}">الرئيسية</a>/</li>
            <li><span>تسجيل دخول</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
<section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8 ">
                <form method="POST" class="main-form full" action="{{ route('login') }}">
                        @csrf
              <!-- <form class="main-form full"> -->
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">تسجيل دخول </h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-email">البريد الالكتروني</label>
                       <input id="login-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      <!-- <input id="login-email" type="email" required="" placeholder="Email Address"> -->
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">

                      <label for="login-pass">كلمة السر</label>
                        <input id="login-pass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      <!-- <input id="login-pass" type="password" required="" placeholder="Enter your Password"> -->
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side"> 
                      <span>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                        <label for="remember_me">تذكرني</label>
                      </span>
                    </div>
                    <button name="submit" type="submit" class="btn-color right-side">Log In</button>
                  </div>

                  <div class="col-12">  <a title="Forgot Password" class="forgot-password mtb-20" href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة السر?') }}
                                </a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account align-center mt-20"> <span>جديد في روفانا ?</span> <a class="link" title="Register with Stylexpo" href="{{route('register')}}">تسجيل جديد </a> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('tamplete.partains.footer')
