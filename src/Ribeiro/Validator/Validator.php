<?php

namespace Ribeiro\Validator;

use Ribeiro\Request\Request;

class Validator implements IValidator
{	
	private $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}
}