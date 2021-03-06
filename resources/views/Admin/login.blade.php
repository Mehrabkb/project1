@extends('Admin.base')
@section('head')
<script>

</script>

@endsection
@section('body')

<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                        <img src="{{ url('/ui/img/logo.png') }}" alt="" width="75" height="75">
                                        </span>
                                    </a>
                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                        <img src="{{ url('/ui/img/logo.png') }}" alt="" width="75" height="75">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">لطفا شماره موبایل یا نام کاربری خود را به همراه رمز عبور
                                    وارد کنید .</p>
                            </div>

                            <form class="admin-login-form" action="{{ route('admin.login.auth') }}" method="POST" novalidate>
                                @csrf
                                @if($errors->any())
                                    <p class="text-danger">{{ $errors->first() }}</p>
                                @endif
                                <div class="form-group mb-3">
                                    <label for="username">شماره موبایل یا نام کاربری</label>
                                    <input class="form-control" name="username" type="text" id="username" required=""
                                        placeholder="شماره موبایل یا نام کاربری خود را وارد کنید">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">رمز عبور</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="رمز عبور را وارد کنید">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye font-12"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-auto">
                                    {!! NoCaptcha::renderJs('fa', true, 'recaptchaCallback') !!}
                                    {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                            checked>
                                        <label class="custom-control-label" for="checkbox-signin">مرا به خاطر
                                            بسپار</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">ورود </button>
                                </div>

                            </form>



                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="{{ route('forget.password') }}"
                                    class="text-white-50 ml-1">رمز عبور خود را فراموش کرده اید؟</a></p>
                            <p class="text-white-50">ثبت نام نکرده اید؟<a
                                    href="{{ route('admin.register') }}"
                                    class="text-white ml-1"><b>ثبت نام کنید</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt text-white-50">
    <div class="container"><small>Copyright © Finter 2020</small></div>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('assets/js/adminpanelvalidation.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

@endsection
