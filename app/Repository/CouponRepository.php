<?php


namespace App\Repository;

use App\Http\Requests\Admin\CouponRequest;
use Exception;
use App\Models\Coupon;
use App\Interfaces\CouponInterface;
use Faker\Provider\Uuid;

class CouponRepository implements CouponInterface
{

    public function index()
    {
        $coupons = Coupon::where(['type_added_by'=>'admin','added_by'=>auth()->user()->id])->get();

        return view('admin.pages.coupon.index', compact('coupons'));
    }

    public function create()
    {
        $coupon = new Coupon;
        return view('admin.pages.coupon.create', compact('coupon'));
    }

    public function show(Coupon $coupon)
    {
        return view('admin.pages.coupon.show', compact('coupon'));
    }

    public function store(CouponRequest $couponRequest)
    {
        Coupon::create([
            'name' => $couponRequest->name,
            'code' => ! empty($couponRequest->code) ? $couponRequest->code : fake()->uuid(),
            'amount' => $couponRequest->amount,
            'type' => $couponRequest->type,
            'limit' => $couponRequest->limit ?? 0,
            'student_limit' => $couponRequest->student_limit ?? 0,
            'start_date' => $couponRequest->start_date,
            'end_date' => $couponRequest->end_date,
            'added_by' => auth()->user()->id,
            'type_added_by' => 'admin',

            'active'=>$couponRequest->active ? '1' :'0',
        ]);

        toastr()->success(trans('messages.success'));
        return to_route('admin.coupon.index');
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.pages.coupon.edit', compact('coupon'));
    }


    public function update(CouponRequest $couponRequest, Coupon $coupon)
    {
        // Check if $coupon is a Collection and retrieve the first item if it is
        if ($coupon instanceof \Illuminate\Database\Eloquent\Collection) {
            $coupon = $coupon->first();
        }
    
        // Update the Coupon instance
        $coupon->name = $couponRequest->name;
        // $coupon->code =  ! empty($couponRequest->code) ? $couponRequest->code : fake()->uuid();
        $coupon->code = $couponRequest->code;
        $coupon->start_date = $couponRequest->start_date;
        $coupon->end_date = $couponRequest->end_date;
        $coupon->limit = $couponRequest->limit ?? 0;
        $coupon->student_limit = $couponRequest->student_limit ?? 0;
        $coupon->amount = $couponRequest->amount;
        $coupon->type = $couponRequest->type;
        $coupon->active = $couponRequest->active ? '1' :'0';

        $coupon->added_by = auth()->user()->id;
        $coupon->type_added_by = 'admin';
        $coupon->save();
    
        toastr()->success(trans('messages.success'));
        return to_route('admin.coupon.index');
    }
    

    public function destroy(CouponRequest $couponRequest, Coupon $coupon)
    {
        // TODO: Implement destroy() method.
        $coupon->delete();

        toastr()->success(trans('messages.success'));

        return to_route('admin.coupon.index');
    }
}
