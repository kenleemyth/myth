<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DTOS</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size: 12px;
	text-align: right;
}
.STYLE1 {font-size: 12px;text-align: left;}
.STYLE3 {
	font-size: 12px;
	font-weight: bold;
	text-align: left;
}
.myth{
	font-size: 12px;
	font-weight: bold;
	line-height: 25px;
	text-align: right;
}
.STYLE4 {
	color: #03515d;
	font-size: 12px;
}
-->
</style>

<script>
var  highlightcolor='#c1ebff';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}
</script>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="<?=HT?>/template/images/tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="<?=HT?>/template/images/tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="<?=HT?>/template/images/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[<a href="index.php?app=gl&action=first" target="NR">系统管理</a>]-[<a href="index.php?app=gl&action=zutuan" target="NR">组团管理</a>]-[添加文章]</td>
              </tr>
            </table></td>
            <td width="54%"><table border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td width="60"><table width="87%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center">
                      
                    </div></td>
                    <td class="STYLE1"></td>
                  </tr>
                </table></td>
                <td width="60"><table width="90%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"></div></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="16"><img src="<?=HT?>/template/images/tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="<?=HT?>/template/images/tab_12.gif">&nbsp;</td>
        <td>
        
        <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="b5d6e6" onmouseover="changeto()"  onmouseout="changeback()">
              <form name="form1" action="" method="post" enctype="multipart/form-data">
        
          <tr>
            <td height="22" colspan="2" background="<?=HT?>/template/images/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">组团内容</span></div></td>
            </tr>
          <tr>
            <td width="17%" height="20" bgcolor="#FFFFFF" class="myth">组团标题：</td>
            <td width="83%" bgcolor="#FFFFFF" class="STYLE1"><?=$row['bt']?></td>
            </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">组团内容：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$admin->readempty($row['text'])?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">时间：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$row['datetime']?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">房间：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$admin->readroom($row['room'])?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">已有队员性别：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$admin->readsex($row['sex'])?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">已有队员人数：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$row['rsnum']?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">联系人微信：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$admin->readempty($row['wxname'])?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">是否审核：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><label for="zt"></label>
              <select name="zt" id="zt">
                <option value="<?=$row['zt']?>" selected="selected"><?=chkzt($row['zt'])?></option>
                <option value="<?=$row['zt']^1?>"><?=chkzt(($row['zt'])^1)?></option>
              </select></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" class="myth">微信OPEN_ID：</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><?=$row['open_id']?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF" class="STYLE1"><input type="submit" name="button" id="button" value="提交"  /> &nbsp;
              <input type="reset" name="button2" id="button2" value="重置" /></td>
          </tr> 
          </form>              
        </table>
        
        </td>
        <td width="8" background="<?=HT?>/template/images/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="<?=HT?>/template/images/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="<?=HT?>/template/images/tab_18.gif" width="12" height="35" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="STYLE4">&nbsp;&nbsp;</td>
            <td><table border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                  
                  </td>
                  </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="16"><img src="<?=HT?>/template/images/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="<?=HT?>/template/images/tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="<?=HT?>/template/images/tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="<?=HT?>/template/images/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">帖子回复</span></td>
              </tr>
            </table></td>
            <td width="54%"><table border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td width="60"><table width="87%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"></div></td>
                    <td class="STYLE1"></td>
                  </tr>
                </table></td>
                <td width="60"><table width="90%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"></div></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="16"><img src="<?=HT?>/template/images/tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="<?=HT?>/template/images/tab_12.gif">&nbsp;</td>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="b5d6e6" onmouseover="changeto()"  onmouseout="changeback()">
         <?php
		 while($list=$admin->fetch_array()){
		 ?>
            <tr>
              <td height="22" colspan="2"  bgcolor="#FFFFFF"><div align="left">
                <p>回复内容：<br />
                  <?=$list['text']?>
                </p>
                <p>回复时间：<?=$list['datetime']?>&nbsp;&nbsp;微信OPEN_ID:<?=$list['open_id']?>&nbsp;&nbsp;<a href="index.php?app=gl&action=zutuan_read&id=<?=$id?>&do=del&delid=<?=$list['id']?>">删除</a></p>
              </div></td>
            </tr>
         <?php
		 }
		 ?>  
        </table></td>
        <td width="8" background="<?=HT?>/template/images/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="<?=HT?>/template/images/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="<?=HT?>/template/images/tab_18.gif" width="12" height="35" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="STYLE4">&nbsp;&nbsp;</td>
            <td><table border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="16"><img src="<?=HT?>/template/images/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
