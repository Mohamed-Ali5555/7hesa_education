<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Student Teacher LMS Exam" />
    <meta name="description" content="7essa Online - Learning Management System" />
    <meta name="author" content="7essaonline.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{trans('main_trans.Main_title')}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/front/front.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/front/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/front/owl.theme.default.min.css') }}" rel="stylesheet">

</head>

<body>

    <div class="wrapper">

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark "  data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">حصة</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                        <a class="nav-link" href="#">معلمين</a>
                        <a class="nav-link" href="#">تواصل معنا</a>
                    </div>
                </div>
            </div>
        </nav>


{{--        <section class="height-100vh d-flex align-items-center page-section-ptb login"--}}
{{--                 style="background-image: url('{{ asset('assets/images/sativa.png')}}');">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center no-gutters vertical-align">--}}

{{--                    <div style="border-radius: 15px;" class="col-lg-8 col-md-8 bg-white">--}}
{{--                        <div class="login-fancy pb-40 clearfix">--}}
{{--                            <h3  class="mb-30">حدد طريقة الدخول</h3>--}}
{{--                            <div class="form-inline">--}}
{{--                                <a class="btn btn-default col-lg-4" title="طالب" href="{{route('login.show','student')}}">--}}
{{--                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/student.png')}}">--}}
{{--                                </a>--}}
{{--                                <a class="btn btn-default col-lg-4" title="معلم" href="{{route('login.show','teacher')}}">--}}
{{--                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/teacher.png')}}">--}}
{{--                                </a>--}}
{{--                                <a class="btn btn-default col-lg-4" title="ادمن" href="{{route('login.show','admin')}}">--}}
{{--                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/admin.png')}}">--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!--=================================
 login-->

    </div>
    <section class="home-silde d-flex align-items-center" style="background-image: url('{{ URL::asset("assets/images/banner.png")}}')">
        <div class="container">
            <div class="row"  data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-12 col-md-6">
                    <div class="educator">
                        <img src="{{URL::asset('assets/images/undraw_educator_re_ju47.svg')}}">
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="desc">
                        <p>لتعلم اسهل واكثر مرونة وفاعلية</p>
                        <h1>دروس وفاعليات مع مدرسين محترفين وبيئة تفاعلية للجميع</h1>
                        <p>تابع دروسك وحصصك ولا تفوت شيئ عبر الانترنت</p>
                        <p>موثوق وسهل الاستخدام من قبل العديد من الاشخاص والمدرسين</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="info">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card ani" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-body">
                            <i class="fa fa-pencil fa-5x" style="color: #299793; margin-bottom: 20px"></i>
                            <p class="card-text">حصص اونلاين</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card ani" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <i class="fa fa-chalkboard-user fa-5x" style="color: #4f6be6; margin-bottom: 20px"></i>
                            <p class="card-text">افضل مدرسين</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card ani" data-aos="fade-up" data-aos-duration="3000">
                        <div class="card-body">
                            <i class="fa-solid fa-user-group fa-5x" style="color: #914fe6; margin-bottom: 20px"></i>
                            <p class="card-text">مجتمع اونلاين</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Favourite">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="fav-desc">
                        <p>افضل مكان للتعلم</p>
                        <p>لتعلم افضل وأكثر فاعلية في جميع المواد الدراسية مع مجتمع مليئ بافضل وامهر المدرسين ومتابعة مستمره </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 button-more">
                    <a href="#" class="btn btn-primary">مشاهدة المزيد</a>
                </div>
            </div>
        </div>
    </section>
    <section class="carousels">
        <div class="container">
            <div class="carousel-head">
                <h2 class="h1 text-center">
                    ألمواد الدراسية
                </h2>
            </div>
            <div class="owl-carousel owl-theme">
                <picture>
                    <source class="owl-lazy" media="(min-width: 650px)" data-srcset="https://placehold.it/350x250&text=3-large">
                    <source class="owl-lazy" media="(min-width: 350px)" data-srcset="https://placehold.it/350x250&text=3-medium">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3-fallback" alt="">
                </picture>
                <div class="card subjects" data-aos="fade-up" data-aos-duration="2500">
                    <div class="card-body">
                        <div class="icone">
                            <i class="fa-solid fa-square-root-variable fa-5x"></i>
                        </div>
                        <p class="card-text text-center">رياضيات</p>
                    </div>
                </div>
                <div class="card subjects" data-aos="fade-up" data-aos-duration="2500">
                    <div class="card-body">
                        <div class="icone">
                            <i class="fa-solid fa-flask fa-5x"></i>
                        </div>
                        <p class="card-text">علوم</p>
                    </div>
                </div>
                <div class="card subjects" data-aos="fade-up" data-aos-duration="2500">
                    <div class="card-body">
                        <div class="icone">
                            <i class="fa-solid fa-landmark-dome fa-5x"></i>
                        </div>
                        <p class="card-text">تاريخ</p>
                    </div>
                </div>
                <div class="card subjects" data-aos="fade-up" data-aos-duration="2500">
                    <div class="card-body">
                        <div class="icone">
                            <i class="fa-solid fa-book-atlas fa-5x"></i>
                        </div>
                        <p class="card-text">جغرافيا</p>
                    </div>
                </div>
                <div class="card subjects" data-aos="fade-up" data-aos-duration="2500">
                    <div class="card-body">
                        <div class="icone">
                            <i class="fa-solid fa-dna fa-5x"></i>
                        </div>
                        <p class="card-text">احياء</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footers">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                   <h3>حصة اونلاين</h3>
                    <p>منصة تعليمية موجهة للطلاب في المراحل الدراسية وتضم نخبة من المدرسين وبيئة تعلم افضل ومجتمع قوي من الطلبة والمدرسين</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul class="">
                        <li><a class="dropdown-item" href="#">الرئيسية</a></li>
                        <li><a class="dropdown-item" title="معلم" href="{{route('login.show','teacher')}}">تسجيل دخول مدرس</a></li>
                        <li><a class="dropdown-item" title="طالب" href="{{route('login.show','student')}}">تسجيل دخول طالب</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h2>التواصل</h2>
                    <ul class="">
                        <li>01000000000</li>
                        <li>9ش المرغني - مدينة نصر - القاهرة</li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <div class="copy">
        <p class="text-center"> جميع الحقوق محفوظة لموقع حصة اونلاين &copy;</p>
    </div>
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ URL::asset('assets/js/front/owl.carousel.min.js') }}"></script>
    <!-- toastr -->
    <script>
        AOS.init();
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true
        });

    </script>
    @yield('js')
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
