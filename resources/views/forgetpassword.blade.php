@extends('Admin.base')

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
                                            <img src="../assets/images/logo-dark.png" alt="" height="22">
                                        </span>
                                    </a>

                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="../assets/images/logo-light.png" alt="" height="22">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">برای بازیابی رمز عبور خود شماره موبایل را وارد کنید</p>
                            </div>

                            <form action="{{ route('forget.password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    @if($errors->any())
                                        <p class="text-danger">{{ $errors->first() }}</p>
                                    @endif
                                    <label for="mobile">شماره موبایل</label>
                                    <input class="form-control" name="mobile" type="text" id="mobile" placeholder="موبایل خود را وارد کنید" required>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> مرحله بعد</button>
                                </div>

                            </form>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">قبلا ثبت نام کرده اید؟ <a href="auth-login.html" class="text-white ml-1"><b>وارد شوید</b></a></p>
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
        2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>
@endsection
