<?php

namespace Ribeiro\HTML\Field;

class InputTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('Ribeiro\HTML\Field\IField', new \Ribeiro\HTML\Field\Input());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $input = new \Ribeiro\HTML\Field\Input();
        $result = $input->createField();
        $expected = "<input     />\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $input = new \Ribeiro\HTML\Field\Input();
        $result = $input
            ->setName('test')
            ->setId('test')
            ->setType('text')
            ->setValue('Test')
            ->createField()
        ;

        $expected = "<input type='text' name='test' value='Test' id='test' />\n";

        $this->assertEquals($expected, $result);
    }

}