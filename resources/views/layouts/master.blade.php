<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="LMS Quizzes Student Teacher" />
    <meta name="description" content="Amr Board LMS - Learning management system" />
    <meta name="author" content="amrboard.augalum.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body>

    <div class="wrapper" >

        <!--=================================
 preloader -->

     
        @includeWhen(Auth::user(),'layouts.main-header')
        {{-- @if (Auth::user())
        @endif --}}
        {{-- @include('layouts.main-sidebar') --}}

        <!-- main-content -->
        <div class="content-wrapper">
            {{-- <div id="pre-loader">
                <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
            </div> --}}
            @yield('page-header')
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0" >@yield('PageTitle')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                    class="default-color">{{ trans('main_trans.Dashboard') }}</a></li>
                            <li class="breadcrumb-item active">@yield('PageTitle')</li>
                        </ol>
                    </div>
                </div>

                @yield('content')

                @include('layouts.footer')
            </div>
        </div>
    </div>
    </div>
    @include('layouts.footer-scripts')
</body>

</html>
