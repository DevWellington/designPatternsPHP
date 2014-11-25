<?php

namespace Ribeiro\Validator;

class ValidatorNameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Ribeiro\Validator\IValidator
     */
    private $validatorName;

    public function setUp()
    {
        $this->validatorName = new \Ribeiro\Validator\ValidatorName();
    }

    public function tearDown()
    {
        $this->validatorName = null;
    }

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', $this->validatorName);
    }

    public function testVerificaSeOValidadorConsegueValidarUmNomeReal()
    {
        $this->validatorName
            ->setName('name')
            ->setValue('te')
        ;

        $this->validatorName->validate();
        $this->assertTrue($this->validatorName->validate());
    }

    public function testVerificaSeConsegueValidarCampoVazio()
    {
        $this->validatorName
            ->setName('name')
            ->setValue('')
        ;

        $this->assertEquals('<li>O campo [name] nao foi preenchido ou e invalido.</li>', $this->validatorName->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmNomeNaoReal()
    {
        $this->validatorName
            ->setName('name')
            ->setValue(false)
        ;

        $this->assertFalse(!$this->validatorName->validate());
    }

}