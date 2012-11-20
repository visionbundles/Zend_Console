Zend Framework cli
=================

Running Zend Framework at command line mode

* cli example 
* multi database

Configure
----------
1. modify "public/index.php" line 1 #!/usr/local/zend/bin/php - (`which php`)
2. php.ini add include_path = ".:/usr/local/zend/share/ZendFramework/library:/usr/local/zend/share/pear"

How to use
------------
1. change directory to Zend MVC "public" folder
2. run "./index.php --help"
3. run test "./index.php --action defaults.index.index"
4. run test "./index.php --action defaults.crawler.run"
