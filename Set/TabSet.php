<?php
namespace Ellie\UI\Set;

use Ellie\UI\Set;


class TabSet extends Set{
    public function __construct($variables = null, $options = null)
    {
        $this->setTemplate('ui/form/set/tab');
        parent::__construct($variables, $options);
    }

    public function render(){
        return parent::render();
    }
}