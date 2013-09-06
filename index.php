<?php
//开启session
session_start();

//设置编码
header('Content-Type:text/html; charset=utf-8');

//基本信息设置
define('ACCESS',true);
define("ROOT",dirname(__FILE__));

//加载文件
include(ROOT.'/config.php');
include(ROOT.'/lib/mysql.class.php');
require(ROOT.'/lib/admin.class.php');
require(ROOT.'/lib/page.class.php');


//实例化数据库类
$admin = new admin($mydbhost, $mydbuser, $mydbpw, $mydbname, "", $mydbcharset);

//读取微信open_id
if(empty($_SESSION['weixinid'])) $_SESSION['weixinid']=$_GET['weixinopenid'];

//入口判断
$app = $_GET['app'] =='' ? 'm' : $_GET['app'];
$action = $_GET['action'] == '' ? 'index' : $_GET['action'];
if($app=="m"){
	include(ROOT.'/mobile/' . $action . '.php');
}
if($app=="gl"){
	include(ROOT.'/guanlihoutai/' . $action . '.php');
}
?>