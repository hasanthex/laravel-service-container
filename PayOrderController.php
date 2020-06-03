<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway){
        $order = $orderDetails->all();
        var_dump($order);

        dd($paymentGateway->charge(25000));
    }

    public function bankPayment(OrderDetails $orderDetails, PaymentGatewayContract $paymentGatewayContract){
        $order = $orderDetails->all();
        var_dump($order);
        
        dd($paymentGatewayContract->charge(40000));
    }

    
}
