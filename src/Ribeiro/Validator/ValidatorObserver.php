<?php

namespace Ribeiro\Validator;

class ValidatorObserver
{
    /**
     * @var array
     */
    private $validadors = [];

    /**
     * @return array
     */
    public function getValidadors()
    {
        return $this->validadors;
    }

    /**
     * @param array $validadors
     */
    public function addValidador(IValidator $validador)
    {
        $this->validadors[] = $validador;
    }

    public function validate()
    {
        $return[] = null;

        foreach($this->validadors as $validate){
            $v = $validate->validate();
            if(!$v)
                $return[$validate->getName()] = $v;
        }

        return $return;
    }

} 