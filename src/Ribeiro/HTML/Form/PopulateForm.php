<?php

namespace Ribeiro\HTML\Form;

use \Ribeiro\HTML\Factories\IFieldSetFactory;

class PopulateForm implements IPopulateForm {

    /**
     * @var IForm
     */
    private $form;

    public function __construct(IForm $form)
    {
        $this->form = $form;
    }

    /**
     * Todo:
     *    Refatorar
     */
    public function populate(array $data)
    {
        foreach($this->form->getField() as $field)
            if ($field instanceof IFieldSetFactory)
                foreach($data as $key => $value)
                    if ($field->getName() == $key)
                        $field->setValue($value);
    }
} 