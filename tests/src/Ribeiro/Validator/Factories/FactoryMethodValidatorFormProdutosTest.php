<?php

namespace Ribeiro\Validator\Factories;

class FactoryMethodValidatorFormProdutosTest extends \PHPUnit_Framework_TestCase
{

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf(
            '\Ribeiro\Validator\Factories\IValidatorForm',
            new \Ribeiro\Validator\Factories\FactoryMethodValidatorFormProdutos()
        );
    }

    public function testVerificaSeConsegueCriarAFabricaDeObjetosEValidarTudoTrue()
    {
        $fabrica = new \Ribeiro\Validator\Factories\FactoryMethodValidatorFormProdutos();

        $f = $fabrica->getValidator([
            'name' => 'Nome para Testes',
            'valor' => 123,
            'txaDescription' => 'Valor com permissao de teste [OK]'
        ]);

        $this->assertNull($f->validate());
    }

    public function testVerificaSeConsegueCriarAFabricaDeObjetosEValidarTudoNaoOK()
    {
        $fabrica = new \Ribeiro\Validator\Factories\FactoryMethodValidatorFormProdutos();

        $f = $fabrica->getValidator([
            'name' => false,
            'valor' => '12d3',
            'txaDescription' => 'Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]Valor com permissao de teste [NAO OK]'
        ]);

        $equals = [
            'name' => '<li>O campo [name] nao foi preenchido ou e invalido.</li>',
            'valor' => '<li>O campo [valor] nao eh um numero.</li>',
            'txaDescription' => '<li>O campo [txaDescription] contem mais que 200 caracteres.</li>'
        ];

        $this->assertEquals($equals, $f->validate());
    }



} 