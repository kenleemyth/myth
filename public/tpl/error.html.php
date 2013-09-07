<?php
if(!defined('ACCESS')) { exit('Access Denied'); }
$url = !empty($url) ? $url : '';
$time = !empty($time) ? $time : 3;
$message = !empty($message) ? $message : '';
$status = isset($status) ? $status : '';
$title_msg = $status == 'error' ? $lang['title_error'] : $lang['title_success'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title_msg; ?></title>
<style type="text/css">
body { margin-top:150px; font: 12px/1.9 Arial, Helvetica, sans-serif; }
#message { margin:0 auto; width:500px; text-align:center; }
#header { padding:15px 10px; border-bottom:1px dotted blue; font-weight:bold; }
<?php
// 如果是错误信息，显示红色，否则显示绿色
if($status == 'error') {
	echo '#message { border:2px solid #F00; } #header { color:#F00; }';
} else {
	echo '#message { border:2px solid #009900; } #header { color:#009900; }';
}
?>
#footer { padding:10px 5px; }
#time { font-weight:bold; }
#time, #footer a { color:#FF0000; }
</style>
</head>

<body>

<div id="message">
    <div id="header"> <?php echo $message; ?> </div>
    <div id="footer">
		<?php
		$cur_url = empty($url) ? 'javascript:window.history.back();' : $url;
		echo $lang['sys_one'] . $time . $lang['sys_two'] . $cur_url . $lang['sys_three'];
		?>
    </div>
</div>

<script type="text/javascript">
var int = 0, i = <?php echo $time; ?>;
int = window.setInterval(function() {
	i--;
	document.getElementById('time').innerHTML = i;
	if(i == 0) {
		window.clearInterval(int);
		<?php
		// 如果 $url 为空，跳转到上一页，否则跳转到指定的页面
		if(empty($url)) {
			echo 'window.history.back();';
		} else {
			echo 'window.location.href = "'.$url.'";';
		}
		?>
	}
}, 1000);
</script>

</body>
</html>