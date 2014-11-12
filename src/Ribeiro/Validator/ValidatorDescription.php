<?php

namespace Ribeiro\Validator;

class ValidatorDescription extends AbstractValidator
{

    public function validate()
    {
        return (strlen($this->value) > 200)
            ? "<li>O campo [{$this->nome}] contem mais que 200 caracteres.</li>"
            : true
        ;
    }

} 