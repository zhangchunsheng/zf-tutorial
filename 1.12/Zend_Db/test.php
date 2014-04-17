<?php
require_once 'Zend/Db.php';

$params = array(
	'host' => '127.0.0.1',
	'username' => 'root',
	'password' => 'root',
	'dbname' => 'zendframeworktutorial'
);

$db = Zend_Db::factory('PDO_MYSQL', $params);

$select = $db -> select();
// $select现在是一个Zend_Db_Select_PdoMysql对象

// select *
// 	from albums
// 	where artist = "Paolo Nutine"
// 	order by id
// 	limit 1 offset 0

$select -> from('albums', '*');
$select -> where('artist=?', 'Paolo Nutine');
$select -> order('id');
$select -> limit(1, 0);

// 连续定义
// $select -> from('albums', '*')
// 	-> where('artist=?', 'Paolo Nutine')
// 	-> order('id')
// 	-> limit(1, 0);

// 读取数据的方法相同
$sql = $select -> __toString();
$result = $db -> fetchAll($sql);
print_r($result);
var_dump($result);//显示数据结构
//error_log($result);
//var_export();

// 对于以上任一种方式，都可以传递$select对象本身
// 使用Zend_Db_Select对象的__toString()可以得到查询语句
