<?php

namespace Ribeiro\Validator;

class ValidatorValorTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', new \Ribeiro\Validator\ValidatorValor());
    }

    public function testVerificaSeOValidadorConsegueValidarUmValorReal()
    {
        $vlValor = new \Ribeiro\Validator\ValidatorValor();
        $vlValor
            ->setName('valor')
            ->setValue(133)
        ;

        $vlValor->validate();

        $this->assertTrue($vlValor->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmValorNaoReal()
    {
        $vlValor = new \Ribeiro\Validator\ValidatorValor();
        $vlValor
            ->setName('valor')
            ->setValue(false)
        ;

        $this->assertEquals(
            '<li>O campo [valor] nao eh um numero.</li>',
            $vlValor->validate()
        );
    }

} 