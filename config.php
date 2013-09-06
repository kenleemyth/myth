<?php
/**
 +----------------------------------------------------------------------
 | MythPHP框架 [佛山市德信创易网络有限公司]
 +----------------------------------------------------------------------
 | Copyright (c) 2013 - 2113 http://www.dexinnet.com All rights reserved.
 +----------------------------------------------------------------------
 | Author: 李勇 <e-mail:myth@dexinnet.com> <QQ:5849963>
 +----------------------------------------------------------------------
 | 文件功能：框架配置文件
 +----------------------------------------------------------------------
 | File: config.php Date: 2013-09-06
 */

defined('ACCESS')||exit('Access Denied');

$c = $array();

//版本信息号
$c['version'] = "MythPHP1.0"; //系统版本号

//session和时区设置
$c['session'] = TRUE; // TRUE为开启, FALSE为关闭
$c['timezone'] = 'Asia/Hong_Kong'; // 时区 PRC


//数据库配置
$c['dbhost']        ="localhost";		//配置主机
$c['dbuser']		="mishi";			//数据库用户
$c['dbpw']			="J3bL3cMY";		//数据库密码
$c['dbname']		="sqlmishi";		//数据库密码
$c['dbcharset'] 	="utf8";			//数据库字符
$c['dbpre']         ="xroom_";			//数据库表名前缀

//设置数据表前缀
define("QIANZHUI","xroom_");   



//设置文件夹
define("HT","guanlihoutai");
define("SJ","mobile");

//程序调试
define("EOEEOE","off");
if(EOEEOE=="open"){
	if(!ini_get('display_errors')){
		ini_set('display_errors','on');
	}
	error_reporting(E_ALL); 
}
?>