<?php
/**
 * Created by PhpStorm.
 * User: devwellington
 * Date: 30/10/14
 * Time: 23:47
 */

namespace Ribeiro\HTML\Factories;


interface IFieldSetFactory {

    public function getData();
    public function getName();
    public function setValue($value);
}
