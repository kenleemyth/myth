<?php
/**
 +----------------------------------------------------------------------
 | MythPHP框架 [佛山市德信创易网络有限公司]
 +----------------------------------------------------------------------
 | Copyright (c) 2013 - 2063 http://www.dexinnet.com All rights reserved.
 +----------------------------------------------------------------------
 | Author: 李勇 <E-mail:myth@dexinnet.com> <QQ:5849963>
 +----------------------------------------------------------------------
 | 文件功能：框架配置文件
 +----------------------------------------------------------------------
 | File: config.php Date: 2013-09-06
 */

defined('ACCESS')||exit('Access Denied');

$c = array();

//版本信息号
$c['version'] = "MythPHP1.0"; //系统版本号

//session和时区设置
$c['session']  = TRUE; // TRUE为开启, FALSE为关闭
$c['timezone'] = 'Asia/Hong_Kong'; // 时区 PRC


//数据库配置
$c['dbhost']        = "localhost";		//配置主机
$c['dbuser']		= "root";			//数据库用户
$c['dbpw']			= "";		//数据库密码
$c['dbname']		= "wogoule";		//数据库密码
$c['dbcharset'] 	= "utf8";			//数据库字符
$c['dbpre']         = "wgl_";			//数据库表名前缀

//配置邮件发送设置
$c['SMTP_HOST']	=	"";  //发信主机
$c['SMTP_NAME']	=	"";	 //发信账号
$c['SMTP_PASS']	=	"";	 //发信密码
$c['SMTP_FROM']	=	"";	 //发信人

//短信设置
$c['SMS_NAME']		=	"";   //短信账号
$c['SMS_PASS']		=	"";	  //短信密码	

//程序调试模式
$c['debug'] = TRUE;  //程序调试模式开启
?>