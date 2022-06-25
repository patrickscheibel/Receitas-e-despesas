<?php
use PHPUnit\Framework\TestCase;

final class PaymentMethodTest extends TestCase 
{
    /**
     * Teste para salvar um novo método de pagamento
     */
    public function testSavePaymentMethod(): void {
        $paymentMethod        = new PaymentMethod;
        $paymentMethod->name  = 'T1';
        $paymentMethod->about = 'T1';
        $this->assertEquals(true, $paymentMethod->save());
    }

    /**
     * Teste para atualizar o último método de pagamento cadastrado
     */
    public function testUpdatePaymentMethod(): void {
        $paymentMethod           = PaymentMethod::findLastById();
        $paymentMethod->name     = 'T2';
        $paymentMethod->about    = 'T2';
        $this->assertEquals(true, $paymentMethod->save());
    }

    /**
     * Teste para deletar o último método de pagamento cadastrado
     */
    public function testDeletePaymentMethod(): void {
        $paymentMethod       = PaymentMethod::findLastById();
        $this->assertEquals(true, $paymentMethod->destroy($paymentMethod->id));
    }

    /**
     * Teste para procurar pelo método de pagamento referente ao cartão de crédito 
     */
    //public function testFindByName(): void {
    //    $paymentMethod           = PaymentMethod::findByName("Cartão de Crédito");
    //    $this->assertEquals(true, $paymentMethod != null);
    //}
}
