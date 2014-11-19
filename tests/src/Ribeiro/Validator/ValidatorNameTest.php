<?php

class ValidatorNameTest extends PHPUnit_Framework_TestCase
{
    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', new \Ribeiro\Validator\ValidatorName());
    }

    public function testVerificaSeOValidadorConsegueValidarUmNomeReal()
    {
        $vlName = new \Ribeiro\Validator\ValidatorName();
        $vlName
            ->setName('name')
            ->setValue('te')
        ;

        $vlName->validate();
        $this->assertTrue($vlName->validate());
    }

    public function testVerificaSeConsegueValidarCampoVazio()
    {
        $vlName = new \Ribeiro\Validator\ValidatorName();
        $vlName
            ->setName('name')
            ->setValue('')
        ;

        $this->assertEquals('<li>O campo [name] nao foi preenchido ou e invalido.</li>', $vlName->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmNomeNaoReal()
    {
        $vlName = new \Ribeiro\Validator\ValidatorName();
        $vlName
            ->setName('name')
            ->setValue(false)
        ;

        $this->assertFalse(!$vlName->validate());
    }

}