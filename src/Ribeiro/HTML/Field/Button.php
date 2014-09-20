<?php
namespace Ribeiro\HTML\Field;

class Button implements IField {

    private $name;
    private $type;
    private $title;
    private $id;

    public function createField()
    {
        $type = ($this->type !== null) ? "type='{$this->type}'" : "";
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        return "<button {$type} {$name} {$id}>{$this->title}</button>\n";
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


} 