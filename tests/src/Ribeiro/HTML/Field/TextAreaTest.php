<?php

namespace Ribeiro\HTML\Field;

class TextAreaTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Field\IField', new \Ribeiro\HTML\Field\Label());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $textArea = new \Ribeiro\HTML\Field\TextArea();
        $result = $textArea->createField();
        $expected = "<textarea   ></textarea>";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $textArea = new \Ribeiro\HTML\Field\TextArea();
        $result = $textArea
            ->setId('test')
            ->setText('Test')
            ->setCols(5)
            ->setRows(10)
            ->createField()
        ;

        $expected = "<textarea rows='10' cols='5' id='test'>Test</textarea>";

        $this->assertEquals($expected, $result);
    }
} 