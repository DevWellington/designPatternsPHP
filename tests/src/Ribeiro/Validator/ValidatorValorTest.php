<?php

namespace Ribeiro\Validator;

class ValidatorValorTest extends \PHPUnit_Framework_TestCase
{

    public function testVerificaSeOValidadorConsegueValidarUmValorReal()
    {
        $vlValor = new \Ribeiro\Validator\ValidatorValor();
        $vlValor
            ->setName('name')
            ->setValue(133)
        ;

        $vlValor->validate();

        $this->assertTrue($vlValor->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmValorNaoReal()
    {
        $vlValor = new \Ribeiro\Validator\ValidatorValor();
        $vlValor
            ->setName('name')
            ->setValue(false)
        ;

        $this->assertEquals(
            '<li>O campo [name] nao eh um numero.</li>',
            $vlValor->validate()
        );
    }

} 