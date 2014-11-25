<?php

namespace Ribeiro\HTML\Factories;

class OptionPrototypeFactory implements IFieldFactory {

    /**
     * @var \Ribeiro\HTML\Field\Child\OptionPrototype
     */
    private $options = [];

    /**
     * @var \Ribeiro\HTML\Field\Child\OptionPrototype
     */
    private $optionPrototype;

    /**
     * @var array|\Ribeiro\DB\IDataToOptions
     */
    private $data;

    /**
     * @param \Ribeiro\HTML\Field\Child\OptionPrototype $optionPrototype
     * @param array $data
     */
    public function __construct
    (
        \Ribeiro\HTML\Field\Child\OptionPrototype $optionPrototype,
        \Ribeiro\DB\IEntity $data
    ) {
        $this->optionPrototype = $optionPrototype;
        $this->data = $data;
    }

    /**
     * @return array of \Ribeiro\HTML\Field\Child\OptionPrototype
     */
    private function createField()
    {
        $optPrototype = new \Ribeiro\HTML\Field\Child\OptionPrototype();

        foreach($this->data->getData() as $value){
            $optPrototype->setData($value);
            $this->options[] = clone $optPrototype;
        }

        return $this->options;
    }

    public function getOption($key)
    {
        $this->options[$key];
    }

    /**
     * @return array
     */
    public function getData()
    {
        $this->createField();

        return $this->options;
    }
} 