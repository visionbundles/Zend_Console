<?php
class EnvController extends Zend_Controller_Action
{
	public function debugAction()
	{
		var_dump(Zend_Controller_Front::getInstance()->getParam('bootstrap')->getOption('phpSettings'));
	}
}