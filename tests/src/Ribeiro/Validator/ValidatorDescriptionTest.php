<?php

namespace Ribeiro\Validator;

class ValidatorDescriptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \Ribeiro\Validator\IValidator
     */
    private $validatorDescription;

    public function setUp()
    {
        $this->validatorDescription = new \Ribeiro\Validator\ValidatorDescription();
    }

    public function tearDown()
    {
        $this->validatorDescription = null;
    }

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\Validator\IValidator', $this->validatorDescription);
    }

    public function testVerificaSeOValidadorConsegueValidarUmaDescricaoComTamanhoNormal()
    {
        $this->validatorDescription
            ->setName('description')
            ->setValue('Test of Description Ok!')
        ;

        $this->assertTrue($this->validatorDescription->validate());
    }

    public function testVerificaSeOValidadorConsegueValidarUmaDescricaoComTamanhoAcimaDoNormal()
    {
        $this->validatorDescription
            ->setName('description')
            ->setValue('Test value where length of text is elevad . ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------')
        ;

        $this->assertEquals(
            '<li>O campo [description] contem mais que 200 caracteres.</li>',
            $this->validatorDescription->validate()
        );
    }

} 