<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setname('Login');
		$this->setMethod('post');
		
		$username = new Zend_Form_Element_Text('username');
		$username	->setLabel('Username:')
			->addFilter('StringTrim')
			->addFilter('StringToLower')
			->addvalidator('Stringlength', array('max' => 8, 'min' =>6 ))
			->setRequired('true');
					 
					 
		$password = new Zend_Form_Element_Text('password');
		$password	->setLabel('Password:')
			->addFilter('StringTrim')		
			->addvalidator('Stringlength', array('max' => 8, 'min' =>6 ))
			->setRequired('true');
					 		
		$submit	= new Zend_Form_Element_Submit('submit');
		$submit	->setLabel('Login');
	
							
				 
 $this->addElements(array($username,$password,$submit));
		
    }


}

