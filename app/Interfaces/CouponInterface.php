<?php


namespace App\Interfaces;

use App\Http\Requests\Admin\CouponRequest;
use App\Models\Coupon;


interface CouponInterface
{
    public function index();
    public function create();
    public function store(CouponRequest $request);
    public function show(Coupon $coupon);
    public function edit(Coupon $coupon);
    public function update(CouponRequest $couponRequest, Coupon $coupon);
    public function destroy(CouponRequest $couponRequest, Coupon $coupon);
}
