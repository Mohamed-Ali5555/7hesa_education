@extends('students.layouts.master')
@section('css')
    @toastr_css
    <script src="https://js.stripe.com/v3/"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->

    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="container">

        <!-- Your payment form -->
        <form action="{{ route('stripe.post') }}" method="post" id="payment-form">
            @csrf
            <input type="hidden" name="productname" value="{{ request('productname') }}">
            <input type="hidden" name="total" value="{{ request('total') }}">
            <input type="hidden" name="package_id" value="{{ request('package_id') }}">
            <input type="hidden" name="coupon_code" value="{{ request('coupon_code') }}">

            <div>
                <label for="card-element">Credit or debit card</label>
                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>
                <div id="card-errors" role="alert"></div>
            </div>

            <button type="submit" class="btn btn-success mt-3">Submit Payment</button>
        </form>
    </div>
    <script>
        var stripe = Stripe(
            'pk_live_51PuLjD04uHNDJ4gZyOl1HGFmBcdDD7w9KsRQMVGSE3Ih0bXgXP05Zqen1t9rsQIV3qqLlPm27qyVRhPiv01QAYkA00dmGyE3hQ'
            );
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            form.submit();
        }
    </script>




    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
