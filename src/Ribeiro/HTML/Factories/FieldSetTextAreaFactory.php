<?php

namespace Ribeiro\HTML\Factories;

class FieldSetTextAreaFactory extends AbstractFieldSetFactory {

    /**
     * @var array
     */
    private $colsRows;

    public function __construct($name, $title, array $colsRows, $value = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->colsRows = $colsRows;
        $this->value = $value;
    }

    /**
     * @return \Ribeiro\HTML\FieldSets\FieldSets
     */
    public function createField()
    {
        $labelTextArea = new \Ribeiro\HTML\Field\Label();
        $labelTextArea
            ->setFor($this->name)
            ->setTitle($this->title)
        ;


        $textArea = new \Ribeiro\HTML\Field\TextArea();
        $textArea
            ->setName($this->name)
            ->setCols($this->colsRows[0])
            ->setRows($this->colsRows[1])
            ->setText($this->value)
        ;

        $fieldSet = new \Ribeiro\HTML\FieldSets\FieldSets();
        $fieldSet
            ->addField($labelTextArea)
            ->addField($textArea)
        ;

        return $fieldSet->createField();
    }

}