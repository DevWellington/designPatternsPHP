<?php

namespace Ribeiro\Validator;

class ValidatorDescription extends AbstractValidator
{

    public function validate()
    {
        return (strlen($this->value) > 200)
            ? "<li>O campo [{$this->name}] contem mais que 200 caracteres.</li>"
            : true
        ;
    }

} 