<?php
namespace Ellie\UI;


class Form extends Element{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/form');
        parent::__construct($variables, $options);
    }

    public function render(){
        return parent::render();
    }
}