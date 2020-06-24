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
                                <p class="text-muted mb-4 mt-3">ثبت نام گیم نت</p>
                            </div>

                            <form action="{{ route('admin.register') }}" method="POST">
                                @csrf
                                @if($errors->any())
                                <p class="text-danger">{{ $errors->first() }}</p>
                                @endif
                                <div class="form-group">
                                    <label for="fname">نام</label>
                                    <input class="form-control" name="fname" type="text" id="fname" placeholder="نام" required>
                                </div>
                                <div class="form-group">
                                    <label for="lname"> نام خانوادگی</label>
                                    <input class="form-control" name="lname" type="text" id="lname" placeholder="نام خانوادگی" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">نام کاربری</label>
                                    <input class="form-control" name="username" type="text" id="username" placeholder="نام کاربری" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">موبایل</label>
                                    <input class="form-control" name="mobile" type="text" id="mobile" placeholder="موبایل" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input class="form-control" name="email" type="text" id="email" placeholder="ایمیل" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">نام گیم نت</label>
                                    <input class="form-control" name="title" type="text" id="title" placeholder="نام گیم نت" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">آدرس گیم نت </label>
                                    <input class="form-control" name="address" type="text" id="address" placeholder="آدرس گیم نت " required>
                                </div>
                                <div class="form-group">
                                    <label for="tel">تلفن</label>
                                    <input class="form-control" name="tel" type="text" id="tel" placeholder="تلفن" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">توضیحات</label>
                                    <input class="form-control" name="description" type="text" id="description" placeholder="توضیحات" required>
                                </div>
                                <input type="hidden" name="lat" value="0">
                                <input type="hidden" name="long" value="0">
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> ثبت نام </button>
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

