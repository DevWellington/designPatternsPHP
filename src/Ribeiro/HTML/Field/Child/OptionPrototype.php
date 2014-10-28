<?php

namespace Ribeiro\HTML\Field\Child;

class OptionPrototype extends Option {

    /**
     * @var array
     */
    private $data = [];

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function __clone()
    {
        $this->setValue($this->data['id']);
        $this->setTitle($this->data['description']);
    }

} 