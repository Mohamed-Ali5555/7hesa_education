<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    @section('title',trans('main_trans.Main_title'))
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="LMS Quizzes Student Teacher" />
    <meta name="description" content="7essa Online - Learning management system" />
    <meta name="author" content="7essaonline.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
</head>
<body>

    <div class="wrapper" >

        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/141376-browser-click.gif') }}" alt="">
        </div>

        @include('teacher.layouts.main-header')
        <div class="container-fluid">
            <div class="row">
                @include('teacher.layouts.main-sidebar')

                <div class="content-wrapper">
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
                    </div>
                 {{-- @if(auth()->user()->status_login !==1) --}}
                    {{-- @include('layouts.continue_register_teacher') --}}
                    {{-- @else --}}
                    @yield('content')
                    {{-- @endif --}}
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-scripts')
    @livewireScripts
    @stack('scripts')
</body>

</html>