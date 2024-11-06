@extends('students.layouts.master')
@section('css')
    @toastr_css
@section('title')
    حصه اونلاين
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    حصه اونلاين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th>#</th>
                                <th>القسم</th>
                                <th>عنوان الحصة</th>
                                <th>تاريخ البداية</th>
                                <th>وقت الحصة</th>
                                <th>رابط الحصة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($online_classes as $online_classe)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $online_classe->group->name }}</td>
                                    <td>{{ $online_classe->topic }}</td>
                                    <td>{{ $online_classe->start_at->format('Y-m-d g:i A') }}
                                    </td>
                                    <td>{{ $online_classe->duration }}</td>
                                   <td>

                                       @if($online_classe->is_active && now()->greaterThanOrEqualTo($online_classe->start_at) && now()->lessThanOrEqualTo($online_classe->end_at))
                                            <a href="{{ route('student.dashboard.sessions.joinLesson', $online_classe) }}" class="btn btn-sm btn-success">Join</a>
                                        @else
                                            <a href="#" class="btn btn-sm btn-danger " @disabled(true)>not start yet</a>

                                        @endif
                                    </td>
                                </tr>
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
