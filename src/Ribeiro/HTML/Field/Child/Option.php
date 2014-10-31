<?php

namespace Ribeiro\HTML\Field\Child;

class Option implements IFieldChild {

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var mixed
     */
    private $title;

    /**
     * @var bool
     */
    private $selected = false;

    public function createField()
    {
        $prtSelect = ($this->selected) ? 'selected' : '';
        return "\t<option value='{$this->value}' {$prtSelect}>{$this->title}</option>\n";
    }

    /**
     * @return boolean
     */
    public function isSelected()
    {
        return $this->selected;
    }

    /**
     * @param boolean $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
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