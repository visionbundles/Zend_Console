<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        var_dump(array(
            'VisionBundles' => 'Zend_Console!',
            'author' => 'eddie@visionbundles.com'
        ));
    }
}

