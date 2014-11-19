<?php

namespace Ribeiro\Validator;

class ValidatorObserverTest extends \PHPUnit_Framework_TestCase{

    public function testVerificaSeConsegueValidarUmObjetoValidatorNameTrue()
    {
        $vlName = $this->getMock('\Ribeiro\Validator\ValidatorName', ['validate']);
        $vlName
            ->expects($this->any())
            ->method('validate')
            ->willReturn(true)
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlName);

        $this->assertTrue($vlObserver->getValidadors()[0]->validate());
    }

    public function testVerificaSeConsegueValidarUmObjetoValidatorNameFalse()
    {
        $vlName = $this->getMock('\Ribeiro\Validator\ValidatorName', ['validate']);
        $vlName
            ->expects($this->any())
            ->method('validate')
            ->willReturn('<li>O campo [name] nao foi preenchido ou e invalido.</li>')
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlName);

        $this->assertEquals(
            '<li>O campo [name] nao foi preenchido ou e invalido.</li>',
            $vlObserver->getValidadors()[0]->validate()
        );
    }

    public function testVerificaSeConsegueValidarUmObjetoValidatorValorTrue()
    {
        $vlValor = $this->getMock('\Ribeiro\Validator\ValidatorValor', ['validate']);
        $vlValor
            ->expects($this->any())
            ->method('validate')
            ->willReturn(true)
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlValor);

        $this->assertTrue($vlObserver->getValidadors()[0]->validate());
    }

    public function testVerificaSeConsegueValidarUmObjetoValidatorValorFalse()
    {
        $vlValor = $this->getMock('\Ribeiro\Validator\ValidatorValor', ['validate']);
        $vlValor
            ->expects($this->any())
            ->method('validate')
            ->willReturn('<li>O campo [valor] nao eh um numero.</li>')
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlValor);

        $this->assertEquals(
            '<li>O campo [valor] nao eh um numero.</li>',
            $vlObserver->getValidadors()[0]->validate()
        );
    }

    public function testVerificaSeConsegueValidarUmObjetoValidatorDescriptionTrue()
    {
        $vlDescription = $this->getMock('\Ribeiro\Validator\ValidatorDescription', ['validate']);
        $vlDescription
            ->expects($this->any())
            ->method('validate')
            ->willReturn(true)
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlDescription);

        $this->assertTrue($vlObserver->getValidadors()[0]->validate());
    }

    public function testVerificaSeConsegueValidarUmObjetoValidatorDescriptionFalse()
    {
        $vlDescription = $this->getMock('\Ribeiro\Validator\ValidatorDescription', ['validate']);
        $vlDescription
            ->expects($this->any())
            ->method('validate')
            ->willReturn('<li>O campo [description] contem mais que 200 caracteres.</li>')
        ;

        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver->addValidador($vlDescription);

        $this->assertEquals(
            '<li>O campo [description] contem mais que 200 caracteres.</li>',
            $vlObserver->getValidadors()[0]->validate()
        );
    }

} 