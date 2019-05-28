<?php


namespace App\CustomFields;


abstract class BaseField
{
    protected $id, $key, $label, $description, $type, $required;
    public abstract function toJson();
    public abstract function fromJson();
}
