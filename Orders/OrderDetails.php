<?php
namespace App\Orders;

use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails{
    
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway){
        $this->paymentGateway = $paymentGateway;
    }

    public function all(){
        $this->paymentGateway->setDiscount(500);

        return [
            'name'  => 'Muhammad Hasan',
            'address'   => 'Lalbagh Dhaka'
        ];
    }

}