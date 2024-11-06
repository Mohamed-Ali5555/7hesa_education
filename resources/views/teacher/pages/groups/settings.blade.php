@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    اعدادات المجموعة - {{ $group->name }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    اعدادات المجموعة - {{ $group->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('teacher.groups.settings.times.update', $group->id) }}"
                    autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="accordion gray plus-icon round">
                                @foreach ($group->days as $day)
                                    <div class="acd-group">
                                        <a href="#" class="acd-heading">{{ trans("app.days.{$day->name}") }}</a>
                                        <div class="acd-des">

                                            <div class="row">
                                                <div class="col-xl-12 mb-30">
                                                    <div class="card ">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <h3>المواعيد</h3>
                                                            <div class="short_actions">
                                                                <a data-href="#"
                                                                    class="btn btn-outline-primary btn-sm add_new_time">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="d-block d-md-flex justify-content-between">
                                                                <div class="d-block">
                                                                </div>

                                                            </div>
                                                            <div class="table-responsive mt-15">

                                                                <table class="table center-aligned-table mb-0">
                                                                    <thead>
                                                                        <tr class="text-dark">
                                                                            <th>#</th>
                                                                            <th>
                                                                                من
                                                                            </th>

                                                                            <th>
                                                                                الي
                                                                            </th>
                                                                            <th>
                                                                                عمليات
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($group->times as $time)
                                                                        <tr>
                                                                                <td>{{ $loop->iteration }}</td>
                                                                                <td>{{ $time->start_time }}</td>
                                                                                <td>{{ $time->end_time }}</td>

                                                                                <td>
                                                                                    <a href="#"
                                                                                        class="btn-sm btn-primary">
                                                                                        Edit
                                                                                    </a>
                                                                                    <a href="#"
                                                                                        class="btn-sm btn-danger">
                                                                                        Remove
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        {{-- 
                                                                            @foreach ($group->days as $day)
                                                                                <tr>

                                                                                    <td>{{ $loop->index }}</td>
                                                                                    <td>{{ $day->name }}</td>
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($list_Sections->Status === 1)
                                                                                            <label
                                                                                                class="badge badge-success">{{ trans('Sections_trans.Status_Section_AC') }}</label>
                                                                                        @else
                                                                                            <label
                                                                                                class="badge badge-danger">{{ trans('Sections_trans.Status_Section_No') }}</label>
                                                                                        @endif

                                                                                    </td>
                                                                                    <td>

                                                                                        <a href="#"
                                                                                            class="btn btn-outline-info btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#edit{{ $list_Sections->id }}">{{ trans('Sections_trans.Edit') }}</a>
                                                                                        <a href="#"
                                                                                            class="btn btn-outline-danger btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#delete{{ $list_Sections->id }}">{{ trans('Sections_trans.Delete') }}</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach --}}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <!--اضافة قسم جديد -->
            <div class="modal fade" id="add_new_time_modal" tabindex="-1" role="dialog"
                aria-labelledby="add_new_time_label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add_new_time_label">
                                {{ trans('Sections_trans.add_section') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('teacher.groups.settings.times.update', $group->id) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="group_day_id" value="{{ $day->group_day->id }}">
                                <div class="row">
                                    <div class="col">
                                        <select name="start" id="start" class="form-control">
                                            @foreach ($times as $time)
                                                <option value="{{ $time }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- --------------------------------------------------- --}}
                                    <div class="col">
                                        <select name="end" id="end" class="form-control">
                                            @foreach ($times as $time)
                                                <option value="{{ $time }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- --------------------------------------------------- --}}

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('Sections_trans.Close') }}</button>
                            <button type="submit" class="btn btn-danger">{{ trans('Sections_trans.submit') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- @include('teacher.pages.groups.partials._form') --}}
            <button class="btn btn-success text-center m-auto" type="submit">
                {{ trans('Students_trans.submit') }}
            </button>
            </form>

        </div>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
<script>
    $('.add_new_time').click(() => {
        $('#add_new_time_modal').modal('show');
    })
</script>
@endsection
