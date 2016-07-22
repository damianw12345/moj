<?php

namespace Login;

use Zend\Form\Form;

class DefaultForm extends Form
{
    function __construct()
    {
        parent::__construct('add');

        $this->setAttribute('method','post' );
        $this->setAttribute('action','login' );

        $this->add( array(
            'name' => 'name',
            'attribute' => array(
                'type' => 'text',
                'required' => 'required',
                'placeholder' => 'Podaj swoję imię',
            ),
            'options' => array(
                'label' => "Wpisz swoję imię :",
            ),
        ));

        $this->add( array(
            'name' => 'submit',
            'attribute' => array(
                'type' => 'submit',
                'required' => 'required'
            ),
        ));
    }
}

?>

