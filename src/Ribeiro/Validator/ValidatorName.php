<?php

namespace Ribeiro\Validator;

class ValidatorName extends AbstractValidator
{
    public function validate()
    {
        return (!is_string($this->value) || ($this->value == ''))
            ? "<li>O campo [{$this->name}] nao foi preenchido ou e invalido.</li>"
            : true
        ;
    }


} 