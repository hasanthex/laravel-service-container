<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PayPaymentGateway;
use App\Billing\Discount;

class PayController extends Controller
{
    public function transaction(Discount $discount, PayPaymentGateway $paymentGateway){
        $discount = $discount->add();
        dd($paymentGateway->charge(2200));
    }
}
