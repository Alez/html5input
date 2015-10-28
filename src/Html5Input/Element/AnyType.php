<?php

class Html5Input_Element_AnyType extends Zend_Form_Element
{
    public $helper = 'anyType';

    public function __construct($spec, $options = null)
    {
        parent::__construct($spec, $options);

        $this->getView()->addHelperPath(__DIR__ . '/../Helper', 'Html5Input_Helper_');
    }
}