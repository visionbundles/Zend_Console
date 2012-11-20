<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        var_dump(array(
            '2Be' => 'command line with Zend Framework',
            'author' => 'yuchih@2be.com.tw'
        ));
    }
}

