<?php

namespace Ribeiro\Validator\Factories;

class FactoryMethodValidatorFormProdutos implements IValidatorForm
{
    /**
     * @var arrayDataForm array
     */
    private $arrayDataForm;

    private function createValidator()
    {
        $validateName = new \Ribeiro\Validator\ValidatorName();
        $validateName
            ->setName('name')
            ->setValue($this->arrayDataForm['name'])
        ;

        $validateValor = new \Ribeiro\Validator\ValidatorValor();
        $validateValor
            ->setName('valor')
            ->setValue($this->arrayDataForm['valor'])
        ;

        $validateTextarea = new \Ribeiro\Validator\ValidatorDescription();
        $validateTextarea
            ->setName('txaDescription')
            ->setValue($this->arrayDataForm['txaDescription'])
        ;


        $vlObserver = new \Ribeiro\Validator\ValidatorObserver();
        $vlObserver
            ->addValidador($validateName)
            ->addValidador($validateValor)
            ->addValidador($validateTextarea)
        ;

        return $vlObserver;
    }

    public function getValidator(array $array)
    {
        $this->arrayDataForm = $array;
        return $this->createValidator();
    }

} 