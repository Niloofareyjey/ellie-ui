<?php

namespace Ellie\UI;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Resolver;

class Set extends ViewModel{
    public function __construct($variables = null, $options = null)
    {
        parent::__construct($variables, $options);
    }

    public function render(){

        $renderer = new PhpRenderer();
        $resolver = new Resolver\AggregateResolver();

        $renderer->setResolver($resolver);
        $map = new Resolver\TemplateMapResolver(array(
            static::getTemplate()      => __DIR__ . '/view/' . static::getTemplate() . '.phtml',
        ));

        $resolver->attach($map) ;   // this will be consulted first
        return $renderer->render($this);
    }

    public function getChild($name){
        if(array_key_exists($name, $this->children)){
            return $this->children[$name];
        }
        return false;
    }
}