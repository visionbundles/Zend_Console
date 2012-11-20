<?php
class CrawlerController extends Zend_Controller_Action
{
	public function runAction()
	{
        var_dump(array(
            '2Be Inc' => 'crawler project',
            '@author' => 'yuchih@2be.com.tw'
        ));
	}
}
