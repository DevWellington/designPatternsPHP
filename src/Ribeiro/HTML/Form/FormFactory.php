<?php

namespace Ribeiro\HTML\Form;

class FormFactory implements IFormFactory
{
	public function createForm()
	{
		return 
		    new \Ribeiro\HTML\Form\Form(
		        new \Ribeiro\Validator\Validator(
		            new \Ribeiro\Request\Request()
		        )
		    );
	}

	public function getForm()
	{
		return $this->createForm();
	}
}