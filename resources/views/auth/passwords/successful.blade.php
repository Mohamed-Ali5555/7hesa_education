<!doctype html>
<html lang="en">
<head>
    <title>تغيير كلمة المرور</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="card container text-center" style="width: 46rem;transform: translate(0%, 50%);padding: 50px;">
    <i class="fas fa-check fa-5x" style="color: rgb(98 46 190)"></i>
    <div class="card-body"  >
        <h5 class="card-title" style="font-size: 22px;font-weight: 600;color: #454446;">تغيير الباسورد بنجاح</h5>
        <p class="card-text"style="font-size: 18px;font-weight: 600;color: #707070;">لقد تم تغيير الباسورد الخاص بك نجاح يمكنك الان تسجيل الدخول</p>
        @if($type == 'student')
            <a href="{{route('login.show', $type)}}" class="btn"style="background-color: #7b39ed;color: #fff;">صفحة تسجيل الدخول</a>
        @endif
        @if($type == 'teacher')
            <a href="{{route('login.show', $type)}}" class="btn"style="background-color: #7b39ed;color: #fff;">صفحة تسجيل الدخول</a>
        @endif

    </div>
</div>
</body>
</html>
