<?php
/**
 +----------------------------------------------------------------------
 | MythPHP框架 [佛山市德信创易网络有限公司]
 +----------------------------------------------------------------------
 | Copyright (c) 2013 - 2063 http://www.dexinnet.com All rights reserved.
 +----------------------------------------------------------------------
 | Author: 李勇 <E-mail:myth@dexinnet.com> <QQ:5849963>
 +----------------------------------------------------------------------
 | 文件功能：公用函数类
 +----------------------------------------------------------------------
 | File: Myth.php Date: 2013-09-07
 */
class common extends mysql{

	//重置get属性和过滤
	function get($str){
		$val = !empty($_GET[$str]) ? $_GET[$str] : null; 

		return $val; 
	}

	//重置post属性


	/*获得客户端真实的IP地址*/
	function getip() {
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
			$ip = getenv("HTTP_CLIENT_IP");
		} else
			if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
				$ip = getenv("HTTP_X_FORWARDED_FOR");
			} else
				if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
					$ip = getenv("REMOTE_ADDR");
				} else
					if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
						$ip = $_SERVER['REMOTE_ADDR'];
					} else {
						$ip = "unknown";
					}
		return ($ip);
	}

	function checkurl() { //检查来路
		if (preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) !== preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST'])) {
			header("Location: http://www.wogoule.com");
			exit();
		}
	}
}
?>