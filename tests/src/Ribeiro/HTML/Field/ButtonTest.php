<?php

namespace Ribeiro\HTML\Field;

class ButtonTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Field\IField', new \Ribeiro\HTML\Field\Button());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $button = new \Ribeiro\HTML\Field\Button();
        $result = $button->createField();
        $expected = "<button   ></button>\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $button = new \Ribeiro\HTML\Field\Button();
        $result = $button
            ->setName('test')
            ->setId('test')
            ->setType('text')
            ->createField()
        ;

        $expected = "<button type='text' name='test' id='test'></button>\n";

        $this->assertEquals($expected, $result);
    }
} 