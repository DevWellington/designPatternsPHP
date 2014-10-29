<?php

namespace Ribeiro\HTML\Facade;

interface IFieldSetFacade {
    /**
     * @param $type
     * @param array $params
     * @return \Ribeiro\HTML\FieldSets\IFieldSets
     */
    public function getFieldSet($type, array $params);
} 