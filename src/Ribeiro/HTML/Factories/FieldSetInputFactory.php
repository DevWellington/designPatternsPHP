<?php

namespace Ribeiro\HTML\Factories;

class FieldSetInputFactory extends AbstractFieldSetFactory {

    /**
     * @var mixed
     */
    protected $type;

    public function __construct($name, $title, $type, $value = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @return \Ribeiro\HTML\FieldSets\FieldSets
     */
    public function createField(){

        $labelInput = new \Ribeiro\HTML\Field\Label();
        $labelInput
            ->setFor($this->name)
            ->setTitle($this->title)
        ;

        $inputName = new \Ribeiro\HTML\Field\Input();
        $inputName
            ->setName($this->name)
            ->setId($this->name)
            ->setType($this->type)
            ->setValue($this->value)
        ;

        $fieldSet = new \Ribeiro\HTML\FieldSets\FieldSets();
        $fieldSet
            ->addField($labelInput)
            ->addField($inputName)
        ;

        return $fieldSet->createField();
    }

}