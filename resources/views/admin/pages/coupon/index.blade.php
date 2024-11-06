@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    كل الكوبونات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    كل الكوبونات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card  h-100">
            <div class="card-body">
                <a href="{{ route('admin.coupon.create') }}" class="btn btn-success btn-sm" role="button"
                    aria-pressed="true">اضافة كوبون جديد</a><br><br>
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الكوبون</th>
                                <th>الكود</th>
                                <th>المبلغ</th>
                                <th>النوع</th>
                                <th>الحاله</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $coupon->name }}</td>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->amount }}</td>
                                    <td>{{ $coupon->type }}</td>
                                    <td>
                                        @if ($coupon->active  )
                                        <span class="bg-success text-white  badge"> مفعل</span>
                                            @else
                                            <span class="bg-danger text-white badge">غير مفعل</span>
                                        @endif
                                    </td>

                                    <td>
                                        
                                        <a href="{{ route('admin.coupon.edit', $coupon->id) }}"
                                            class="btn btn-info btn-sm" role="button"
                                            aria-pressed="true"><i class="fa fa-edit"></i>
                                        </a>
                                        
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        data-toggle="modal"
                                        data-target="#Delete_coupon{{ $coupon->id }}"><i
                                            class="fa fa-trash"></i>
                                    </button>
                                        
                                        </td>



                                        
                                    <div class="modal fade" id="Delete_coupon{{$coupon->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف {{$coupon->name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.coupon.destroy',$coupon->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{$coupon->id}}">
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
                                </tr>

                                {{-- @include('pages.library.destroy') --}}
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
