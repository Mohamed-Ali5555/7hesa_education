@extends('students.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ $package->name }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ $package->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="container">
    <div class="row"><div class="col-md-8">
        <div class="card" >
            <img style="height:340px;" src="{{ asset('assets/images/uploads') . '/' . $package->image }}"
            alt="image logo">
            <div class="card-body">
              <h5 class="card-title">{{$package->name}}</h5>
              <p class="card-text">{!!$package->description!!}</p>
           
              <h5 class="card-title">{{$package->price}}</h5>

            </div> <div class="card-body">
                
                <h6 class="card-text"><span style="float: left;">start :  </span> <span> {{$package->start_at}}</span> </h6>
                <h6 class="card-text"><span style="float: left;">end : </span> <span> {{$package->end_at}}</span></h6>
  
              </div>
          </div>
        </div>
        <div class="col-md-4">
      
                <div class=" card cart-apply-coupon mb-30 p-4">
                    <h6>Have a Coupon?</h6>
                    <p>Enter your coupon code here &amp; get awesome discounts!</p>
                    <!-- Form -->
                    <div class="coupon-form">
                        {{-- <form action="#" id="coupon-form" method="post"> --}}
                            {{-- @csrf --}}
                            <input type="text" class="form-control" id="code" name="code"
                                placeholder="Enter Your Coupon Code">
                                @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <button id="applay_coupon" type="submit" class="coupon-btn btn btn-primary btn-block">Apply Coupon</button>
                       
                       {{-- <a id="applay_coupon" class="coupon-btn btn-primary btn-block">applay coupon</a> --}}
                            {{-- </form> --}}
                    </div>

                    <div class="row mb-3">
                        <span style="color:red" id="coupon-faild"></span>
                        <span style="color:green" id="coupon-success"></span>

                    </div>
                </div>
          

    </div>

    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <td colspan="3" class="text-right font-weight-bold">اجمالي رسوم الدوره</td>
                        <td class="text-left font-weight-bold">
                            <span id="totalPrice" class="h5">{{$package->price}}</span>
                            <input type="hidden" id="total_before_coupon" value="{{$package->price}}">
                        </td>
                    </tr>
                </table>
                
                <div id="paypal-button-container"></div>
    
                <input type="hidden" id="package_id" value="{{$package->id}}">
                <input type="hidden" id="coupon_code" value="">
                <input type="hidden" id="total" value="{{$package->price}}">
                <input type="hidden" id="productname" value="{{$package->name}}">
            </div>
        </div>
    </div>

    
</div>


<!-- row closed -->
@endsection
@section('js')



<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=USD"></script>

<script>
    paypal.Buttons({
        // fundingSource: paypal.FUNDING.CARD,
           fundingSource: undefined, // هذا سيسمح بجميع وسائل الدفع المتاحة
            style: {
                layout: 'vertical',  // عرض كل وسائل الدفع
                color: 'blue',
                shape: 'rect',
                label: 'paypal'
            },
         createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: document.getElementById('total').value,
                        currency_code: 'USD'  // تأكد من تحديد العملة
                    },
                    description: document.getElementById('productname').value
                }],
                application_context: {
                    shipping_preference: "NO_SHIPPING",
                    user_action: "PAY_NOW"  // إضافة زر دفع مباشر
                }
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // إرسال تفاصيل الدفع إلى الخادم
                return fetch('{{ route("payment.process") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        orderID: data.orderID,
                        payerID: data.payerID,
                        paymentID: details.id,
                        total: document.getElementById('total').value
                        // لن تحتاج العنوان أو المدينة لأنك عطلتها
                    })
                }).then(function(res) {
                    return res.json();
                }).then(function(serverResponse) {
                    if (serverResponse.success) {
                        // Redirect to a thank you page or show a success message
                        window.location.href = '{{ route("payment.success") }}';
                    } else {
                        throw new Error('Server-side payment processing failed');
                    }
                });
            });
        },
        onError: function(err) {
           console.error(err);
            let errorMessage = 'حدث خطأ في معالجة الدفع. ';
            if (err.message) {
                errorMessage += err.message;
            }
            alert(errorMessage);
        }
    }).render('#paypal-button-container');
</script>
<script>
    $('#applay_coupon').on('click', function(e) {
        e.preventDefault();
        var code = $('#code').val();
        // alert(code);
        var _token = "{{ csrf_token() }}";
        // let discount = $('#valueDiscount').attr("valDiscount");
        let total_before_coupon = $('#total_before_coupon').val();
        let newAmount = 0;
        $.ajax({
            url: "{{route('student.dashboard.teachers.applay_coupon')}}",
            method: 'POST',
            data: {
                code,
                total_before_coupon,
                _token
            },   
            success: function(response) {
                $('#coupon-faild').html("")
                $('#coupon-success').html(response.msg)
                // totalDiscount = parseFloat(discount)+parseFloat(response.discount)
                // $('#valueDiscount').html(totalDiscount.toFixed(2))
                newAmount = parseFloat(response.total_price.toFixed(2)) ;
                $('#totalPrice').html(newAmount.toFixed(2));
                $('#total').val(newAmount.toFixed(2));
                $('#coupon_code').val(code);

            },
            error: function(response) {
                var errorMsg = response.responseJSON ? response.responseJSON[1] : 'An error occurred';
                $('#coupon-success').html("");
                $('#coupon-faild').html(errorMsg);
            }
        });
    });
</script>
@toastr_js
@toastr_render
@endsection
