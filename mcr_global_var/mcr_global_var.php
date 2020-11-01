<?php
/**
 * Add a Custom Global Variables for your TPL files.
 * To use the variables in TPL use e.g.: {$modules.mcr_global_var.your_variable}
 *
 * @author    Diana Acevedo <oldaggr@gmail.com>
 * @copyright 2020 Diana Acevedo
 */

class Mcr_global_var extends Module
{
    public function __construct()
	{
		$this->name = 'mcr_global_var';
		$this->version = '1.0.0';
		$this->author = 'Diana Acevedo';
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('MCR Global Variables');
		$this->description = $this->l('MCR Global Variables');
		$this->ps_versions_compliance = array('min' => '1.7.0.0', 'max' => '1.7.99.999');
	}

    public function install()
    {
        return parent::install() && $this->registerHook('actionFrontControllerSetVariables');
    }

    public function hookActionFrontControllerSetVariables()
    {
        return [
            'your_variable1' => 'your_value1',
            'your_variable2' => 'your_value2',
        ];
    }
}
