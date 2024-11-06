@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    المجموعات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    المجموعات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{ route('teacher.groups.create') }}" class="btn btn-success" role="button"
                    aria-pressed="true">اضافة مجموعة جديدة</a>

                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th>#</th>
                                <th>الاسم</th>
                                <th>عدد الطلاب المشتركين في المجموعه</th>
                                <th>السنه</th>
                                {{-- <th>السنه</th>
                                <th>الترم</th> --}}
                                <th>الحاله</th>
                                <th>الظهور</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                            {{-- @dd($group) --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->enrolled_students_count ?? 0 }}</td>
                                    <td>{{ $group->class->Name_Class }}</td>
                                    <td>{{ $group->visibility }}</td>
                                    <td>
                                        @if ($group->status)
                                            <span class="badge text-white bg-success">مفعله</span>
                                        @else
                                            <span class="badge text-white bg-danger">غير مفعله</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="text-white btn-sm bg-primary" href="{{ route('teacher.groups.edit',$group->id) }}">
                                            <i class="fas fa-pencil"></i>

                                        </a>
                                        <a class="text-white mx-2 btn-sm bg-primary" href="{{ route('teacher.groups.settings',[
                                            'group' => $group->id
                                        ]) }}">
                                            <i class="fas fa-cogs"></i>
                                        </a>
                                    </td>
                                    {{-- <td>{{ $package->invoice_period }} {{ $package->invoice_interval }}</td>
                                    <td>{{ $package->price }}</td>
                                    <td></td> --}}
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
