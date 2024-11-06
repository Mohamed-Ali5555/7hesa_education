@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    الباقات والاشتراكات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    الباقات والاشتراكات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{ route('admin.package.create') }}" class="btn btn-success" role="button"
                    aria-pressed="true">اضافة باقة جديدة</a>

                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th>#</th>
                                <th>الاسم</th>
                                <th>price</th>

                                <th>status</th>
                                <th>start_at</th>
                                <th>end_at</th>
                                <th>package_type</th>

                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $package)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $package->name }}</td>
                                    <td>{{ $package->price }}</td>
                              
                                    <td> <span class="badge {{ $package->status ==1 ? 'badge-success' : 'badge-danger' }}">{{ $package->status ==1 ? 'active' : 'inactive' }}</span></td>
                                  
                                  
                                  
                                    <td>{{ $package->start_at }}</td>
                                    <td>{{ $package->end_at }}</td>

                                    <td>
                                        @if($package->package_type ==1)
                                        <span class="badge badge-info">  سنويه</span>

                                        @else 
                                        <span class="badge badge-info"> شهريه  </span>

                                        @endif
                                    
                                    </td>
                                    <td>
                                        <a
                                        href="{{ route('admin.package.edit', $package->id) }}" class="btn btn-sm btn-primary">
                                        <i
                                        class="fa fa-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-info btn-sm"
                                        data-toggle="modal"
                                        data-target="#change_status{{ $package->id }}"><i
                                            class="fa fa-edit"></i>
                                    </button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-toggle="modal"
                                            data-target="#Delete_package{{ $package->id }}"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </td>



                                    <div class="modal fade" id="change_status{{$package->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف {{$package->topic}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.package.destroy',$package->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="meeting_id" value="{{$package->meeting_id}}">
                                                        <h5 style="font-family: 'Cairo', sans-serif;">هل انت متاكد مع عملية الحذف ؟</h5>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                                                            <button  class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="modal fade" id="Delete_package{{$package->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف {{$package->topic}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.package.destroy',$package->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{$package->id}}">
                                                        <h5 style="font-family: 'Cairo', sans-serif;">هل انت متاكد مع عملية الحذف ؟</h5>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                                                            <button  class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
