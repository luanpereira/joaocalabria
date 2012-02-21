<?php

class Application_Form_Catequisando extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
    	$nome = new Zend_Form_Element_Text('username');
		$nome->setLabel('Nome')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty')
		->addValidator('StringLength', false, array(5,30));
		
		$email = new Zend_Form_Element_Text('email');
		$email->setLabel('E-mail')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('EmailAddress');		
		
		$submit = new Zend_Form_Element_Submit('Salvar');
 
		$this->addElements( array($nome, $email, $submit) );
    }


}

