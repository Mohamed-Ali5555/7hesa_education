@extends('teacher.layouts.master')


@section('title')
    مرحبا بك :
    {{ auth()->user()->name }}
@endsection

@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    الرئيسيه
@stop

@section('content')
    @if (isset(auth()->user()->grade_id, auth()->user()->classroom_id, auth()->user()->section_id))
        <!-- widgets -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100" style="background-color: #f8f8f8">
                    <div class="card-body card-teacher">
                        <div class="clearfix">
                            <div class="float-left">
                                <span style="color: #122f56 !important">
                                    <i class="fas fa-user-graduate highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text" style="color: #122f56 !important">عدد الطلاب</p>
                                <h4>{{ $count_students }}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top" style="color: #122f56 !important">
                            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a
                                href="{{ route('teacher.student.index') }}" target="_blank"><span class="text-light">عرض
                                    البيانات</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100" style="background-color: #f8f8f8">
                    <div class="card-body card-class">
                        <div class="clearfix">
                            <div class="float-left">
                                <span style="color: #122f56 !important;">
                                    <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text" style="color: #122f56 !important">عدد الاقسام</p>
                                <h4>{{ $count_sections }}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top" style="color: #122f56 !important">
                            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a
                                href="{{ route('teacher.sections') }}" target="_blank"><span class="text-light">عرض
                                    البيانات</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div style="height: 400px;" class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="tab nav-border" style="position: relative;">
                            <div class="d-block d-md-flex justify-content-between">
                                <div class="d-block w-100">
                                    <h5 class="card-title">اخر العمليات
                                        علي النظام</h5>
                                </div>
                                <div class="d-block d-md-flex nav-tabs-custom">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active show" id="students-tab" data-toggle="tab"
                                                href="#students" role="tab" aria-controls="students"
                                                aria-selected="true"> الطلاب</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent">

                                {{-- students Table --}}
                                <div class="tab-pane fade active show" id="students" role="tabpanel"
                                    aria-labelledby="students-tab">
                                    <div class="table-responsive mt-15">
                                        <table style="text-align: center"
                                            class="table center-aligned-table table-hover mb-0">
                                            <thead>
                                                <tr class="table-info text-light">
                                                    <th>#</th>
                                                    <th>اسم الطالب</th>
                                                    <th>البريد الالكتروني</th>
                                                    <th>النوع</th>
                                                    <th>المرحلة الدراسية</th>
                                                    <th>الصف الدراسي</th>
                                                    <th>القسم</th>
                                                    <th>تاريخ الاضافة</th>
                                                </tr>
                                            </thead>
                                            {{-- <tbody>
                                                @forelse(\App\Models\Student::where('teacher_id', auth()->user()->id)->take(5)->get() as $student)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $student->name }}</td>
                                                        <td>{{ $student->email }}</td>
                                                        @if ($student->gender)
                                                            <td>{{ trans("app.gender.{$student->gender}") }}
                                                            </td>
                                                        @else
                                                            <td>لم يقم الطالب بالاختيار</td>
                                                        @endif
                                                        @if ($student->grade_id != null)
                                                            <td>{{ $student->grade->Name }}</td>
                                                        @else
                                                            <td>لم يقم الطالب بالاختيار</td>
                                                        @endif
                                                        @if ($student->classroom_id != null)
                                                            <td>{{ $student->classroom->Name_Class }}</td>
                                                        @else
                                                            <td>لم يقم الطالب بالاختيار</td>
                                                        @endif
                                                        @if ($student->section_id != null)
                                                            <td>{{ $student->section->name }}</td>
                                                        @else
                                                            <td>لم يقم الطالب بالاختيار</td>
                                                        @endif
                                                        <td class="text-success">{{ $student->created_at }}
                                                        </td>
                                                    @empty
                                                        <td class="alert-danger" colspan="8">لاتوجد بيانات
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody> --}}
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:calendar />
    @else
        <div class="content-wrapper">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body text-center">
                                <img src="{{ URL::asset('assets/images/undraw_new_notifications_re_xpcv.svg') }}"
                                    style="width:300px;margin-bottom: 25px"alt="avatar">
                                <div class="error-details" style="font-size: 20px;margin-bottom: 20px">
                                    ناسف لعدم عرض الصفحة حتى يتم استكمال البيانات
                                </div>

                                <a href="{{ url('/completeTeacher/index', auth()->user()->teacher_id) }}"
                                    class="btn btn-primary btn-lg">استكمال البيانات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
