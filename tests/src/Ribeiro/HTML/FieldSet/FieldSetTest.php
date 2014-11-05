<?php

class FieldSetTest extends PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf('\Ribeiro\HTML\FieldSets\IFieldSets', new \Ribeiro\HTML\FieldSets\FieldSets());
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $fs = new \Ribeiro\HTML\FieldSets\FieldSets();
        $result = $fs->createField();
        $expected = "<fieldset>
</fieldset>
";

        $this->assertEquals($expected, $result);
    }

} 