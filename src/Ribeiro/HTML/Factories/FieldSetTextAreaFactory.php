<?php

namespace Ribeiro\HTML\Factories;

class FieldSetTextAreaFactory implements IFieldFactory, \Ribeiro\HTML\Field\IField {

    /**
     * @var mixed
     */
    private $name;

    /**
     * @var mixed
     */
    private $title;

    /**
     * @var array
     */
    private $colsRows;

    /**
     * @var null
     */
    private $value;

    public function __construct($name, $title, array $colsRows, $value = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->colsRows = $colsRows;
        $this->value = $value;
    }

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

    public function getData()
    {
        return $this->createField();
    }
}