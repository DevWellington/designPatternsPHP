<?php

namespace Ribeiro\HTML\Field;

class LabelTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Field\IField', new \Ribeiro\HTML\Field\Label());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $label = new \Ribeiro\HTML\Field\Label();
        $result = $label->createField();
        $expected = "<label   ></label>\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $label = new \Ribeiro\HTML\Field\Label();
        $result = $label
            ->setName('test')
            ->setId('test')
            ->setFor('test')
            ->createField()
        ;

        $expected = "<label name='test' for='test' id='test'></label>\n";

        $this->assertEquals($expected, $result);
    }
} 