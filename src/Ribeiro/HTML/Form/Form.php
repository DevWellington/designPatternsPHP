<?php

namespace Ribeiro\HTML\Form;

use Ribeiro\HTML\Field\IField;
use Ribeiro\Validator\Validator;

class Form implements IForm {

    private $name;
    private $action;
    private $method;
    private $id;

    /**
     * @var \Ribeiro\HTML\Field\IField
     */
    private $field = [];

    /**
     * @var \Ribeiro\Validator\Validator
     */
    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function render()
    {
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";
        $action = ($this->action !== null) ? "action='{$this->action}'" : "";
        $method = ($this->method !== null) ? "method='{$this->method}'" : "";
        $id = ($this->id !== null) ? "id='{$this->id}'" : "";

        $htmlForm = "<form {$name} {$method} {$action} {$id}>\n";
        foreach($this->field as $field)
            $htmlForm .= $field->createField() . "<br />";
        $htmlForm .= "</form>\n";

        return $htmlForm;
    }

    /**
     * @param array $field
     */
    public function addField(IField $field)
    {
        $this->field[] = $field;
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

    /**
     * @return Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * @param Validator $validator
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;
    }

}