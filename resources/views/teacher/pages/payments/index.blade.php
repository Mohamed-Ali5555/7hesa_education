@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    المدفوعات 
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
المدفوعات 
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
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th>#</th>
                                <th>package name</th>
                                <th>student name</th>

                                <th>teacher name</th>
                                <th>payment_status</th>
                                <th>amount</th>

                                <th>created_at</th>

                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($payments) >0 )
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($payment->package)->name }}</td>
                                    <td>
                                        {{ optional($payment->student)->name }}
                                    
                                    </td>
                                    <td>
                                        {{ optional($payment->teacher)->name }}
                                  
                                    </td>

                                    <td>
                                        <span class="badge {{ $payment->payment_status == 1 ? 'badge-success' : 'badge-danger' }}">
                                            {{ $payment->payment_status == 1 ? 'active' : 'inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ optional($payment)->amount }}
                                    
                                    </td>
                                    <td>{{ optional($payment)->created_at }}</td>

                            
                                    <td>
                                        
                                  
                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-toggle="modal"
                                            data-target="#change_status{{ $payment->id }}"><i
                                                class="fa fa-edit"></i>
                                        </button>
                                    </td>



                                    <div class="modal fade" id="change_status{{$payment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                        تحديث حالة الدفع: {{$payment->topic}}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('teacher.payment.update_status', $payment->id)}}" method="post">
                                                        @csrf
                                                        @method('PATCH') <!-- استخدم PATCH لتحديث السجل -->
                                                        
                                                        <input type="hidden" name="meeting_id" value="{{$payment->meeting_id}}">
                                                        
                                                        <!-- إضافة حقل اختيار الحالة -->
                                                        <div class="form-group">
                                                            <label for="payment_status">اختر الحالة الجديدة:</label>
                                                            <select name="payment_status" id="payment_status" class="form-control" style="height: 70px;">
                                                                <option value="1" {{ $payment->payment_status == '1' ? 'selected' : '' }}>active</option>
                                                                <option value="0" {{ $payment->payment_status == '0' ? 'selected' : '' }}>not active</option>
                                                            </select>
                                                        </div>
                                    
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                                                            <button type="submit" class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                            @endforeach
                            
                            @else 
                            <tr>there is no payment yet</tr>
                            @endif
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
