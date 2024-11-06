@extends('teacher.layouts.master')
@section('css')
    @toastr_css


@section('title')
    اضافة اختبار جديد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة اختبار جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <style>
        .without_ampm::-webkit-datetime-edit-ampm-field {
            display: none;
        }
        input[type=time]::-webkit-clear-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance:none;
            appearance: none;
            margin: -10px;
        }

    </style>
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('teacher.quizzes.store')}}" method="post" autocomplete="off">
                                @csrf

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">اسم الاختبار باللغة العربية</label>
                                        <input type="text" name="Name_ar" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="title">اسم الاختبار باللغة الانجليزية</label>
                                        <input type="text" name="Name_en" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">الدرجة لكل سؤال</label>
                                        <input type="text" name="marks" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="title">المجموع الكلي</label>
                                        <input type="text" name="totalmarks" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="duration">مدة الاختبار</label>
                                        <input type="number" name="hours" id="hours" class="form-control" placeholder="ساعات" min="0" max="12">
                                    </div><br>
                                    <div class="col">
                                        <input type="number" name="minutes" id="minutes" class="form-control" placeholder="دقائق" min="0" max="59">
                                    </div>
                                </div>

                                <br>
                                <div class="form-row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="grade_id">المادة الدراسية : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="subject_id">
                                                <option selected disabled>حدد المادة الدراسية...</option>
                                                @foreach($subjects as $subject)
                                                    <option  value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="grade_id"> package_id : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="package_id">
                                                <option selected disabled>حدد package_id ...</option>
                                                @foreach($packages as $package)
                                                    <option  value="{{ $package->id }}">{{ $package->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>



                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="grade_id">
                                                <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                                @foreach($grades as $grade)
                                                    <option  value="{{ $grade->id }}">{{ $grade->Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="classroom_id">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                            <select class="custom-select mr-sm-2" name="section_id">

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                            </form>
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
        $(document).ready(function(){
            $(".plan").change(function () {
                var plan = $(this).val();
                if(plan == 1){
                    $(this).next().attr('required', 'required');
                    $(this).next().next().attr('required', 'required');
                    $(this).next().prop('disabled', false);
                    $(this).next().next().prop('disabled', false);
                }else{
                    $(this).next().removeAttr('required', 'required');
                    $(this).next().next().removeAttr('required', 'required');
                    $(this).next().prop('disabled', true);
                    $(this).next().next().prop('disabled', true);
                }
            })
        })
    </script>
@endsection
