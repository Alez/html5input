# html5input
Plugin to use with Zend Framework 1.
Allows you to use html5 form elements such as "email" or "number" or whatever.

# how to install
composer require alez/html5input

# how to use
```php
<?php

class My_Form extends Zend_Form
{
    public function init()
    {
        $email = new Html5Input_Element_AnyType('email', array(
            'type'       => 'email',
            'filters'    => array('StringTrim', 'StringToLower'),
            'validators' => array(
                array('EmailAddress'),
            ),
            'required'    => true,
            'placeholder' => 'Email',
        ));

        $this->addElement($email);
    }
}
```