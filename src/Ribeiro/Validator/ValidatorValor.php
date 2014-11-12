<?php

namespace Ribeiro\Validator;

class ValidatorValor extends AbstractValidator
{
    public function validate()
    {
        return (!is_numeric($this->value))
            ? "<li>O campo [{$this->name}] nao eh um numero.</li>"
            : true
        ;
    }

}