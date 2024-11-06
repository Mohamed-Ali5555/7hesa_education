@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    حصص اونلاين
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    حصص اونلاين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{ route('teacher.online_sessions.create') }}" class="btn btn-success" role="button"
                    aria-pressed="true">اضافة حصة اونلاين جديدة</a>
                {{-- <a class="btn btn-warning" href="{{ route('teacher.indirect.create') }}">اضافة حصة اوفلاين
                    جديدة</a> --}}
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th>#</th>
                                <th>المرحلة</th>
                                <th>الصف</th>
                                <th>مجموعه</th>
                                <th>عنوان الحصة</th>
                                <th>تاريخ البداية</th>
                                <th>تاريخ النهايه</th>
                                <th>رابط الحصة</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($online_classes as $online_class)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $online_class->grade->Name }}</td>
                                    <td>{{ $online_class->classroom->Name_Class }}</td>
                                    <td>{{ optional($online_class->group)->name }}</td>
                                    <td>{{ $online_class->topic }}</td>
                                    <td>{{ $online_class->start_at }}</td>
                                    <td>{{ $online_class->end_at }}</td>
                                    {{-- <td>{{ $lesson->is_active ? 'Active' : 'Inactive' }}</td> --}}
                                    <td>
                                        @if(!$online_class->is_active)
                                            <form action="{{ route('teacher.online_sessions.activate', $online_class) }}" method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">Activate</button>
                                            </form>


                                            @else 

                                            <a href="{{ route('teacher.online_sessions.showlink', $online_class->id) }}" class="btn btn-sm btn-info">انضم الان</a>

                                        @endif
                                    </td>
                                    <td>
                                        <a
                                        href="{{ route('teacher.online_sessions.edit', $online_class->id) }}" class="btn btn-sm btn-primary">
                                        <i
                                        class="fa fa-pencil"></i>
                                    </a>

                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-toggle="modal"
                                            data-target="#Delete_receipt{{ $online_class->meeting_id }}"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @include('teacher.pages.online_classes.delete')
                            @endforeach
                    </table>
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
@endsection
