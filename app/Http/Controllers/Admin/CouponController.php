<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use App\Repository\CouponRepository;
use App\Http\Requests\Admin\CouponRequest;
use App\Interfaces\CouponInterface;

class CouponController extends Controller
{
    private CouponInterface $couponRepository;

    public function __construct(CouponInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function index()
    {
        return $this->couponRepository->index();
    }


    public function create()
    {
        return $this->couponRepository->create();
    }

    public function store(CouponRequest $request)
    {
        return $this->couponRepository->store($request);
    }


    public function show(Coupon $coupon)
    {
        return $this->couponRepository->show($coupon);
    }

    public function edit(Coupon $coupon)
    {
        return $this->couponRepository->edit($coupon);
    }


    public function update(CouponRequest $couponRequest, Coupon $coupon)
    {
        return $this->couponRepository->update($couponRequest, $coupon);
    }


    public function destroy(CouponRequest $couponRequest, Coupon $coupon)
    {
        return $this->couponRepository->destroy($couponRequest, $coupon);
    }
}
