<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OrderService;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use App\Notifications\Backend\User\OrderCreatedNotification;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout.index');
    }

    public function verify(Request $request)
    {
        // Verify the payment
        // Cart::instance('default')->destroy();

        // session()->forget([
        //     'coupon',
        //     'saved_user_address_id',
        //     'saved_shipping_company_id',
        //     'saved_payment_method_id',
        //     'shipping'
        // ]);



        return response()->json(['success' => 1, 'redirecto' => route('user.orders')]);

    }
}
