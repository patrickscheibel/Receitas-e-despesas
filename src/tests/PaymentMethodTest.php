<?php
use PHPUnit\Framework\TestCase;

final class PaymentMethodTest extends TestCase {
    public function testSavePaymentMethod(): void {
        $paymentMethod        = new PaymentMethod;
        $paymentMethod->name  = 'T1';
        $paymentMethod->about = 'T1';
        $this->assertEquals(true, $paymentMethod->save());
    }

    public function testUpdatePaymentMethod(): void {
        $paymentMethod           = PaymentMethod::findLastById();
        $paymentMethod->name     = 'T2';
        $paymentMethod->about    = 'T2';
        $this->assertEquals(true, $paymentMethod->save());
    }

    public function testDeletePaymentMethod(): void {
        $paymentMethod       = PaymentMethod::findLastById();
        $this->assertEquals(true, $paymentMethod->destroy($paymentMethod->id));
    }

    public function testFindByName(): void {
        $paymentMethod           = PaymentMethod::findByName("Cartão de Crédito");
        $this->assertEquals(true, $paymentMethod != null);
    }
}
