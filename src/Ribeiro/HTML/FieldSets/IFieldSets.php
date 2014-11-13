<?php

namespace Ribeiro\HTML\FieldSets;

use \Ribeiro\HTML\Field\IField;

interface IFieldSets extends \Ribeiro\HTML\Field\IField
{
	public function addField(IField $field);
}