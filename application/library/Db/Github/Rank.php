<?php
class Db_Github_Rank extends Zend_Db_Table_Abstract
{
	protected $_adapter = 'github';
	
	protected $_name = 'JobRank';

	protected function _setupDatabaseAdapter()
	{
		$this->_db = Zend_Registry::get($this->_adapter);
	}
}
