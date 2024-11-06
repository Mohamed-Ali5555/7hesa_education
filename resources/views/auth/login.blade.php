<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="LMS Quizzes Student Teacher" />
    <meta name="description" content="7essa Online - Learning management system" />
    <meta name="author" content="7essaonline.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ trans('main_trans.Main_title') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <!--=================================
preloader -->

        <div id="pre-loader">

            <img src="{{ URL::asset('assets/images/pre-loader/141376-browser-click.gif') }}" alt="">

        </div>

        <!--=================================
preloader -->

        <!--=================================
login-->

        <section class="height-100vh d-flex align-items-center page-section-ptb login">
            <div class="container">
                <div class="row justify-content-center no-gutters vertical-align">

                    <div class="col-lg-4 col-md-6 bg-white">
                        <div class="login-fancy pb-40 clearfix">
                            <h3 style="font-family: 'Cairo', sans-serif; color:#337ce6; font-size:30px" class="mb-30">
                                @if ($type == 'student')
                                    تسجيل دخول طالب
                                @elseif($type == 'teacher')
                                    تسجيل دخول معلم
                                @else
                                    تسجيل دخول ادمن
                                @endif
                            </h3>

                            @if (session()->has('message'))
                                <div class="alert alert-danger">
                                    <li>{!! session()->pull('message') !!}</li>
                                </div>
                            @endif


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                @honeypot
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="name">البريدالالكتروني*</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    <input type="hidden" value="{{ $type }}" name="type">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="section-field mb-20">
                                    <label class="mb-10" for="Password">كلمة المرور * </label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="section-field">
                                    <div class="remember-checkbox mb-30">
                                        <input type="checkbox" class="form-control" name="two" id="two" />
                                        <label for="two"> تذكرني</label>
                                        <a href="{{ route('reset.pass', $type) }}" class="float-right">هل نسيت
                                            كلمةالمرور ؟</a>
                                        <br>
                                        @if ($type == 'student')
                                            <a href="{{ url('/register', $type) }}" class="float-right"> تسجيل</a>
                                        @elseif($type == 'teacher')
                                            <a href="{{ url('/register', $type) }}" class="float-right"> تسجيل</a>
                                        @endif
                                    </div>
                                </div>
                                <button class="button"><span>دخول</span><i class="fa fa-check"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="image-login">
                        <div class="image">
                            <img src="{{ URL::asset('assets/images/undraw_online_stats_0g94.svg') }}" alt="avatar"
                                style="width: 270px;position: relative;margin-bottom: 20px;">
                            <div class="desc-login">
                                <h1>موقع AmrBoard</h1>
                                <p>للتعليم الاونلاين</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
login-->

    </div>
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';
    </script>

    <!-- chart -->
    <script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
    <!-- calendar -->
    <script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
    <!-- charts sparkline -->
    <script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
    <!-- charts morris -->
    <script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
    <!-- toastr -->
    @yield('js')
    <script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
    <!-- validation -->
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>
    <!-- lobilist -->
    <script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
