<?php

namespace Ribeiro\HTML\FieldSets;

class FieldSets implements IFieldSets, \Ribeiro\HTML\Field\IField
{
    private $name;

	/**
	 * @var \Ribeiro\HTML\Field\IField
	 */
	private $field = [];

	public function addField(\Ribeiro\HTML\Field\IField $field)
	{
		$this->field[] = $field;
        return $this;
	}

	public function createField()
	{
        $name = ($this->name !== null) ? "name='{$this->name}'" : "";

        $htmlFieldSet = "<fieldset {$name}>\n";
        foreach($this->field as $field)
            $htmlFieldSet .= $field->createField() . "<br />";
        $htmlFieldSet .= "</fieldset>\n";

        return $htmlFieldSet;
	}

}