<?php
namespace App\Billing;

use App\Billing\PayPaymentGateway;

class Discount{
    
    private $paymentGateway;

    public function __construct(PayPaymentGateway $payPaymentGateway){
        $this->payPaymentGateway = $payPaymentGateway;
    }

    public function add(){
        $this->payPaymentGateway->setDiscount(500);
    }

}