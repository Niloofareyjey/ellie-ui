<?php

namespace Ellie\UI\Set;

use Ellie\UI\Set;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\PhpRenderer;

class FieldSet extends Set{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/set/fieldset');
        parent::__construct($variables, $options);
    }

    public function render(){
        return parent::render();
    }
}