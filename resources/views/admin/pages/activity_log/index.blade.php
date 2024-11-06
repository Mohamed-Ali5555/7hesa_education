@extends('admin.layouts.master')
@section('css')
    @toastr_css
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/github.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/diff2html/bundles/css/diff2html.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/diff2html/bundles/js/diff2html-ui.min.js"></script> --}}
    <style>
        .log_updated {
            overflow-wrap: break-word;
        }
    </style>
@section('title')
    Activity Logs
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    Activity Logs
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
                            <tr>
                                <th width="5%">#</th>
                                <th width="10%">بواسطة</th>
                                <th width="30%">الوصف</th>
                                <th width="5%">الحدث</th>
                                <th width="15%">منذ</th>
                                {{-- <th width="15%">تمت علي</th> --}}
                                <th width="10%">عمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logs as $log)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ optional($log->causer)->name }}</td>
                                    <td>{{ $log->description }}</td>
                                    {{-- <td>{{ $log->item }}</td> --}}

                                    <td>
                                        <span @class([
                                            'badge',
                                            'badge-danger' => $log->event == 'deleted',
                                            'badge-primary' => $log->event == 'created',
                                            'badge-info' => $log->event == 'updated',
                                        ])>
                                            {{ trans("app.log_events.{$log->event}") }}
                                        </span>
                                    </td>

                                    <td width="15%">{{ $log->created_at }} <br>
                                        ({{ $log->created_at->diffForHumans() }})
                                    </td>

                                    <td width="10%">
                                        <a class="log_show" href="#" data-href="{{ route('admin.logs.show', $log->id) }}"><i
                                                class="far fa-eye "></i>&nbsp; عرض </a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="logViewer" tabindex="-1" role="dialog" aria-labelledby="logViewerLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logViewerLabel">عرض حركه #<span class="id_log"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td class="causer_name"></td>
                        </tr>
                        <tr>
                            <td>Ip:</td>
                            <td class="ip"></td>
                        </tr>
                        <tr>
                            <td>User Agent:</td>
                            <td class="user_agent"></td>
                        </tr>
                        <tr>
                            <td>Event:</td>
                            <td class="event"></td>
                        </tr>
                        <tr>
                            <td>At:</td>
                            <td class="created_at"></td>
                        </tr>

                    </tbody>
                </table>
                {{-- <div class="log_updated">
                    <div class="d-flex">

                        <div class="w-50 old bg-secondary p-1 text-white w-50"></div>
                        <div class="w-50 new bg-skype p-1 text-white w-50"></div>
                    </div>
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    $('.log_show').click(function() {
        let full_url = $(this).data('href');
        $.ajax({
            url: full_url,
            success: function(res) {

                $('#logViewer .causer_name').text(res.causer_name)
                $('#logViewer .ip').text(res.ip)

                $('#logViewer .user_agent').text(res.user_agent);

                $('#logViewer .event').html(`
                <span class="badge
                ${res.event == 'deleted' ? 'badge-danger' : ''}
                ${res.event == 'created' ? 'badge-primary' : ''}
                ${res.event == 'updated' ? 'badge-info' : ''}">
                ${res.event_name}
                </span>
                `);

                $('#logViewer .created_at').text(res.created_at)

                // $('#logViewer .log_updated .old').text(JSON.stringify(res.old_content))
                // $('#logViewer .log_updated .new').text(JSON.stringify(res.new_content))

                $('#logViewer').modal('show');

            },
        });
    });
</script>
@endsection
