<?php

namespace App\Http\Controllers;

use App\Models\User;

class CouponController extends Controller
{
    public function index()
    {
        $user = User::find(1)->first(); //temporary

        return view('shop.coupon.index', [
            'user' => $user,
        ]);
    }
}
