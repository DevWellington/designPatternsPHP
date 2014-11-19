<?php

class ValidatorDescriptionTest extends PHPUnit_Framework_TestCase
{
    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', new \Ribeiro\Validator\ValidatorDescription());
    }

    public function testVerificaSeOValidadorConsegueValidarUmaDescricaoComTamanhoNormal()
    {
        $vlName = new \Ribeiro\Validator\ValidatorDescription();
        $vlName
            ->setName('description')
            ->setValue('Test of Description Ok!')
        ;

        $vlName->validate();

        $this->assertTrue($vlName->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmaDescricaoComTamanhoAcimaDoNormal()
    {
        $vlName = new \Ribeiro\Validator\ValidatorDescription();
        $vlName
            ->setName('description')
            ->setValue('Test value where length of text is elevad . ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------')
        ;

        $this->assertEquals(
            '<li>O campo [description] contem mais que 200 caracteres.</li>',
            $vlName->validate()
        );
    }

} 