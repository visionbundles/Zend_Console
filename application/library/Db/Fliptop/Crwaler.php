<?php
class Db_Fliptop_Crwaler extends Zend_Db_Table_Abstract
{
	protected $_adapter = 'fliptop';
	
	protected $_name = 'fliptop';

	protected function _setupDatabaseAdapter()
	{
		$this->_db = Zend_Registry::get($this->_adapter);
	}
	
}
