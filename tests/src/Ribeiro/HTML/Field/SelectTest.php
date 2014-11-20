<?php

namespace Ribeiro\HTML\Field;

class SelectTest extends \PHPUnit_Framework_TestCase{

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\Field\IField', new \Ribeiro\HTML\Field\Select());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTMLCompleto()
    {
        $select = new \Ribeiro\HTML\Field\Select();
        $option = new \Ribeiro\HTML\Field\Child\Option();
        $option
            ->setValue(1)
            ->setTitle('um')
        ;

        $select->setOption($option);

        $result = $select->createField();
        $expected = "<select  >\n\t<option value='1' >um</option>\n</select>\n";

        $this->assertEquals($expected, $result);
    }

}