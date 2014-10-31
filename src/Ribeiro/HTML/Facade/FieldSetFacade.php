<?php

namespace Ribeiro\HTML\Facade;

class FieldSetFacade implements IFieldSetFacade {

    /**
     * @var \Ribeiro\HTML\FieldSets\IFieldSets
     */
    private $fieldSet;

    /**
     * @param $type
     * @param array $params
     * @return \Ribeiro\HTML\FieldSets\IFieldSets
     */
    public function getFieldSet($type, array $params)
    {
        switch ($type) {
            case 'input':
                $this->fieldSet = new \Ribeiro\HTML\Factories\FieldSetInputFactory(
                    $params[0], $params[1], $params[2], $params[3] = null
                );
                break;
            case 'textarea':
                $this->fieldSet = new \Ribeiro\HTML\Factories\FieldSetTextAreaFactory(
                    $params[0], $params[1], $params[2], $params[3] = null
                );
                break;
            case 'select':
                $this->fieldSet =  new \Ribeiro\HTML\Factories\FieldSetSelectFactory(
                    $params[0],
                    $params[1],
                    new \Ribeiro\HTML\Factories\OptionPrototypeFactory(
                        new \Ribeiro\HTML\Field\Child\OptionPrototype(),
                        new \Ribeiro\DB\Category($params[2])
                    ),
                    $params[3] = null
                );
                break;
            default:
                throw new \InvalidArgumentException("FieldSet invalido!");
        }

        return $this->fieldSet;
    }
}