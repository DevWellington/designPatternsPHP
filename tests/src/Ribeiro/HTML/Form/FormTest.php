<?php

namespace Ribeiro\HTML\Form;

class FormTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Form\IForm', new \Ribeiro\HTML\Form\Form(
            new \Ribeiro\Validator\Validator(
                new \Ribeiro\Request\Request()
            )
        ));
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $form = new \Ribeiro\HTML\Form\Form(
            new \Ribeiro\Validator\Validator(
                new \Ribeiro\Request\Request()
            )
        );
        $result = $form->render();
        $expected = "<form    >\n</form>\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $form = new \Ribeiro\HTML\Form\Form(
            new \Ribeiro\Validator\Validator(
                new \Ribeiro\Request\Request()
            )
        );
        $result = $form
            ->setId('test')
            ->setName('test')
            ->setAction('test')
            ->setMethod('POST')
            ->render()
        ;

        $expected = "<form name='test' method='POST' action='test' id='test'>\n</form>\n";

        $this->assertEquals($expected, $result);
    }

} 