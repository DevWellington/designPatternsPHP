<?php

namespace Ribeiro\HTML\Factories;

class FieldSetSelectFactory extends AbstractFieldSetFactory{

    /**
     * @var OptionPrototypeFactory
     */
    protected $ops;

    /**
     * @var \Ribeiro\HTML\Field\Select
     */
    private $select;

    public function __construct($name, $title, OptionPrototypeFactory $ops, $value = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->ops = $ops;
        $this->value = $value;

        $this->select = new \Ribeiro\HTML\Field\Select();
        $this->select->setOptions($this->ops->getData());
    }

    public function setValue($value)
    {
        foreach($this->ops->getData() as $op)
            if($op->getTitle() == $value)
                $op->setSelected(true);
    }

    /**
     * @return \Ribeiro\HTML\FieldSets\FieldSets
     */
    public function createField(){

        $label = new \Ribeiro\HTML\Field\Label();
        $label
            ->setFor($this->name)
            ->setTitle($this->title)
        ;

        $this->select
            ->setName($this->name)
            ->setId($this->name)
        ;

        $fieldSet = new \Ribeiro\HTML\FieldSets\FieldSets();
        $fieldSet
            ->addField($label)
            ->addField($this->select)
        ;

        return $fieldSet->createField();
    }
} 