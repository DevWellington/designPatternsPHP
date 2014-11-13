<?php

namespace Ribeiro\HTML\FieldSets;

class FieldSets implements IFieldSets
{
	/**
	 * @var \Ribeiro\HTML\Field\IField
	 */
	private $field = [];

    /**
     * @param \Ribeiro\HTML\Field\IField $field
     * @return $this
     */
	public function addField(\Ribeiro\HTML\Field\IField $field)
	{
		$this->field[] = $field;
        return $this;
	}

    /**
     * @return string
     */
	public function createField()
	{
        $htmlFieldSet = "<fieldset>\n";
        foreach($this->field as $field)
            $htmlFieldSet .= $field->createField() . "<br />";
        $htmlFieldSet .= "</fieldset>\n";

        return $htmlFieldSet;
	}

}