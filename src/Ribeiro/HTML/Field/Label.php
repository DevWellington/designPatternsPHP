<?php

namespace Ribeiro\HTML\Field;

class Label implements IField {

    private $name;
    private $for;
    private $title;
    private $id;

    public function render()
    {
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $for = ($this->for !== null) ? "for='{$this->for}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        return "<label {$name} {$for} {$id}>{$this->title}</label>\n";
    }

    /**
     * @param mixed $for
     */
    public function setFor($for)
    {
        $this->for = $for;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFor()
    {
        return $this->for;
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

}