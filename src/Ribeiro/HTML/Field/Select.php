<?php

namespace Ribeiro\HTML\Field;

use Ribeiro\HTML\Field\Child\IFieldChild;

class Select implements IField {

    private $name;
    private $id;

    private $option = array();

    public function createField()
    {
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        $htmlSelect = "<select {$name} {$id}>\n";
        foreach($this->option as $option)
            $htmlSelect .= $option->createField();
        $htmlSelect .= "</select>\n";

        return $htmlSelect;
    }

    /**
     * @param array $option
     */
    public function setOption(Child\IFieldChild $option)
    {
        array_push($this->option, $option);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
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

} 