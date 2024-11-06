

@extends('admin.layouts.master')
@section('css')
    @toastr_css
    @section('title')
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body text-center">
                                <img src="{{ URL::asset('assets/images/undraw_new_notifications_re_xpcv.svg') }}" style="width:300px;margin-bottom: 25px"alt="avatar">
                                <div class="error-details" style="font-size: 20px;margin-bottom: 20px" >
                                    ناسف لعدم عرض الصفحة حتى يتم استكمال البيانات
                                </div>

                                <a href="{{url('/complete/index', $students[0]['student_id'])}}" class="btn btn-primary btn-lg">استكمال البيانات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render

    <script>
        function alertAbuse() {
            alert("برجاء عدم إعادة تحميل الصفحة بعد دخول الاختبار - في حال تم تنفيذ ذلك سيتم الغاء الاختبار بشكل اوتوماتيك ");
        }
    </script>

@endsection
