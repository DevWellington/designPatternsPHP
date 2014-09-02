<?php

namespace Ribeiro\HTML\Form;

use Ribeiro\HTML\Field\IField;

class Form implements IForm {

    private $name;
    private $action;
    private $method;
    private $id;

    private $field = array();

    public function render()
    {
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $action = ($this->action !== null) ? "action='{$this->action}'" : "";
        $method = ($this->method !== null) ? "method='{$this->method}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        $htmlForm = "<form {$name} {$method} {$action} {$id}>\n";
        foreach($this->field as $field)
            $htmlForm .= $field->render() . "<br />";
        $htmlForm .= "</form>\n";

        return $htmlForm;
    }

    /**
     * @param array $field
     */
    public function setField(IField $field)
    {
        array_push($this->field, $field);
        return $this;
    }

    /**
     * @return array
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
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



} 