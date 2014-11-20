<?php

namespace Ribeiro\HTML\FieldSet;

class FieldSetTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeClasseEstaComInterfaceCorreta()
    {
        $this->assertInstanceOf(
            '\Ribeiro\HTML\FieldSets\IFieldSets',
            new \Ribeiro\HTML\FieldSets\FieldSets()
        );
    }

    public function testVerificaSeCriaOObjetoEmFormatoHTML()
    {
        $fs = new \Ribeiro\HTML\FieldSets\FieldSets();
        $result = $fs->createField();
        $expected = "<fieldset>\n</fieldset>\n";

        $this->assertEquals($expected, $result);
    }

    public function testVerificaSeFieldSetConsegueReceberUmInput()
    {
        $inputMocked = $this->getMock('\Ribeiro\HTML\Field\Input', ['setType']);
        $inputMocked
            ->expects($this->any())
            ->method('setType')
            ->willReturn('text')
        ;

        $fieldset = new \Ribeiro\HTML\FieldSets\FieldSets();
        $fieldset->addField($inputMocked);

        $this->assertEquals(
            "<fieldset>\n<input     />\n<br /></fieldset>\n"
            ,
            $fieldset->createField()
        );

    }

} 