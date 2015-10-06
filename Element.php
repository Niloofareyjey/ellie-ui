<?php
namespace Ellie\UI;

use Zend\View\Model\ViewModel;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Resolver;

class Element extends ViewModel{
    protected $name;

    public function __construct($variables = null, $options = null)
    {
        $variables['name'] = (!isset($variables['name']))?"":$variables['name'];
        $this->name = $variables['name'];
        parent::__construct($variables, $options);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        $this->setVariable('name', $name);
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

    public function fill($data){
        foreach ($data as $key => $value) {
            $this->getChildrenByCaptureTo($key)->setVariable('value', $value);
        }

    }
}