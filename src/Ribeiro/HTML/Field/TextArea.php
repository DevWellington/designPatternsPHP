<?php

namespace Ribeiro\HTML\Field;

class TextArea implements IField {

    private $name;
    private $rows;
    private $cols;
    private $text;
    private $id;

    public function createField()
    {
        $rows = ($this->rows !== null) ? "rows='{$this->rows}'" : "";
        $cols = ($this->cols !== null) ? "cols='{$this->cols}'" : "";
        $id = ($this->id !== null) ? "id='$this->id'" : "";

        return "<textarea {$rows} {$cols} {$id}>{$this->text}</textarea>";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}