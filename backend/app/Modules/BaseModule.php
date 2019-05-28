<?php


namespace App\Module;


abstract class BaseModule
{
    protected $products = [], $localizations = [];

    public function hasProduct() {
        return count($this->products);
    }

    public function getTemplate() {

    }
}
