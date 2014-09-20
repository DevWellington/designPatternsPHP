<?php

namespace Ribeiro\HTML\Field;

class Input implements IField {

    private $name = null;
    private $type = null;
    private $value = null;
    private $id = null;

    public function createField()
    {
        $type = ($this->type !== null) ? "type='{$this->type}'" : "";
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $value = ($this->value !== null) ? "value='{$this->value}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        return "<input {$type} {$name} {$value} {$id} />\n";
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
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