<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="{{ asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

@yield('css')
<!--- Style css -->
{{-- <link href="{{ asset('style.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<!--- Style css -->

@if (App::getLocale() == 'en')
    <link href="{{ asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif
