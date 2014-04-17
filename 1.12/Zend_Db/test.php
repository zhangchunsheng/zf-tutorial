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

$data = array(
    'user_id' => 1,
    'city' => "beijing"
);
print_r($data);
unset($data["city"]);
print_r($data);

//version_compare
$version = "iWeidao/5.2.1 D/219";
$regex = '/\/([\d|.]+) D/'; 
preg_match($regex, $version, $matches);
print_r($matches);

$version = $matches[1];
if(version_compare($version, "5.2") >= 0) {
    $data["media_id"] = "media";
}
print_r($data);