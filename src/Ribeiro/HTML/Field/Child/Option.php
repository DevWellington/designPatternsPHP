<?php

namespace Ribeiro\HTML\Field\Child;

class Option implements IFieldChild {

    private $value;
    private $title;

    public function createField()
    {
        return "\t<option value='{$this->value}'>{$this->title}</option>\n";
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}