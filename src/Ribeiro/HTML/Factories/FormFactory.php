<?php

namespace Ribeiro\HTML\Factories;

class FormFactory implements IFormFactory
{
    /**
     * @return \Ribeiro\HTML\Form\Form
     */
    public function createForm()
	{
		return 
		    new \Ribeiro\HTML\Form\Form(
		        new \Ribeiro\Validator\Validator(
		            new \Ribeiro\Request\Request()
		        )
		    );
	}

    /**
     * @return \Ribeiro\HTML\Form\Form
     */
    public function getForm()
	{
		return $this->createForm();
	}
}