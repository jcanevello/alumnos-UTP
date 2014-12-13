<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-12 21:01:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:01:31 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('alumno')
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#7 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#11 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:07:41 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:07:41 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('alumno')
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#7 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#11 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:10:49 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php:1668
2014-12-12 21:10:49 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('alumno')
#1 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#5 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#6 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#9 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php:1668
2014-12-12 21:11:06 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:11:06 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('alumno')
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#7 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#11 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:11:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-12 21:11:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:42:03 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:42:03 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('alumno')
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#7 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#11 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:50:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-12 21:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:55:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2014-12-12 21:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:55:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database' not found ~ MODPATH\database\classes\Database.php [ 3 ] in file:line
2014-12-12 21:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:57:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database' not found ~ MODPATH\database\classes\Database.php [ 3 ] in file:line
2014-12-12 21:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:57:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-12 21:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 21:57:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 21:57:56 --- DEBUG: #0 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('alumno')
#3 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\alumnos-UTP\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('')
#7 C:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#8 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#11 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\alumnos-UTP\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-12 22:03:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-12 22:03:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 22:26:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-12 22:26:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-12 22:26:52 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'alumnos_utp' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ] in D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php:75
2014-12-12 22:26:52 --- DEBUG: #0 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('alumnos_utp')
#1 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('alumno')
#4 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('')
#8 D:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#9 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#12 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#15 {main} in D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php:75
2014-12-12 22:29:43 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'alumnos_utp' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ] in D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php:75
2014-12-12 22:29:43 --- DEBUG: #0 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('alumnos_utp')
#1 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('alumno')
#4 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\xampp\htdocs\alumnos-UTP\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('')
#8 D:\xampp\htdocs\alumnos-UTP\application\classes\Controller\Alumno.php(14): Kohana_ORM::factory('Alumno', '')
#9 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Controller.php(84): Controller_Alumno->action_save()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Alumno))
#12 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\xampp\htdocs\alumnos-UTP\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\xampp\htdocs\alumnos-UTP\index.php(118): Kohana_Request->execute()
#15 {main} in D:\xampp\htdocs\alumnos-UTP\modules\database\classes\kohana\database\mysql.php:75