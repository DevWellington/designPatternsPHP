<?php

namespace Ribeiro\HTML\Factories;

use Ribeiro\HTML\Field\IField;

class AbstractFieldSetFactory implements IFieldSetFactory, IField {

    /**
     * @var mixed
     */
    protected $name;
    protected $title;
    protected $value;

    public function createField() { }

    public function getName()
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getData()
    {
        return $this->createField();
    }
} 