<?php
use PHPUnit\Framework\TestCase;
class PaymentTest extends TestCase
{
    public function testChargeConfirmed(){
        $payment = $this->getMockBuilder(Payment::class)
                        ->setMethods(['authorize'])
                        ->getMock();
        $payment->expects($this->once())
            ->method('authorize')
            ->will($this->returnValue('CONFIRMED'));
            $shop = new OnlineShop();
            $response = $shop->charge($payment);
            $this->assertTrue($response);
    }
}