<?php

namespace Ellie\UI\Element;

use Ellie\UI\Element;

class Text extends Element{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/element/text');
        parent::__construct($variables, $options);
    }

    public function render(){
        return parent::render();
    }
}