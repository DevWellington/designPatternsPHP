<?php

namespace Ribeiro\Validator;

class ValidatorValorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Ribeiro\Validator\IValidator
     */
    private $validatorValor;

    public function setUp()
    {
        $this->validatorValor = new \Ribeiro\Validator\ValidatorValor();
    }

    public function tearDown()
    {
        $this->validatorValor = null;
    }

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', $this->validatorValor);
    }

    public function testVerificaSeOValidadorConsegueValidarUmValorReal()
    {
        $this->validatorValor
            ->setName('valor')
            ->setValue(133)
        ;

        $this->assertTrue($this->validatorValor->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmValorNaoReal()
    {
        $this->validatorValor
            ->setName('valor')
            ->setValue(false)
        ;

        $this->assertEquals(
            '<li>O campo [valor] nao eh um numero.</li>',
            $this->validatorValor->validate()
        );
    }

} 