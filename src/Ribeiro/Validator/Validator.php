<?php

namespace Ribeiro\Validator;

use Ribeiro\Request\Request;

class Validator implements IValidator
{	
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

    /**
     * @param array $data
     * @return null|string
     */
    public function validate(array $data)
    {
        $return[] = $this->validateName($data['name']);
        $return[] = $this->validateValor($data['valor']);
        $return[] = $this->validateDescription($data['txaDescription']);

        return $return;
    }

    /**
     * @param $value
     * @return null|string
     */
    private function validateName($value)
    {
        return ($value === '') ? '<li>O campo [Nome] nao foi preenchido.</li>' : NULL;
    }

    /**
     * @param $value
     * @return null|string
     */
    private function validateValor($value)
    {
        return (!is_numeric($value)) ? '<li>O campo [Valor] nao eh um numero.</li>' : NULL;
    }

    /**
     * @param $value
     * @return null|string
     */
    private function validateDescription($value)
    {
        return (strlen($value) > 200) ? '<li>O campo [Descricao] contem mais que 200 caracteres.</li>' : NULL;
    }

}