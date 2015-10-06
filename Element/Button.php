<?php

namespace Ellie\UI\Element;

use Ellie\UI\Element;

class Button extends Element{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/element/button');
        parent::__construct($variables, $options);
    }

    public function render(){
        return parent::render();
    }
}