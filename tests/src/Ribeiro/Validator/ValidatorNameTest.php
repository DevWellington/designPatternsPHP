<?php

class ValidatorNameTest extends PHPUnit_Framework_TestCase
{

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