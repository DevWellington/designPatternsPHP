<?php

namespace Ribeiro\HTML\Field\Child;

class OptionTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Field\Child\IFieldChild', new \Ribeiro\HTML\Field\Child\Option());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $option = new \Ribeiro\HTML\Field\Child\Option();
        $result = $option->createField();
        $expected = "	<option value='' ></option>\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $option = new \Ribeiro\HTML\Field\Child\Option();
        $result = $option
            ->setValue(0)
            ->setTitle('zero')
            ->createField()
        ;

        $expected = "	<option value='0' >zero</option>\n";

        $this->assertEquals($expected, $result);
    }
} 