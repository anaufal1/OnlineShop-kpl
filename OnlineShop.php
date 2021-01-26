<?php
namespace App\Payment;

class OnlineShop{
    public function charge(Payment $payment){
        $respone = $payment->authorize();
        if($response == 'CONFIRMED'){
            return true;
        }
    }
}