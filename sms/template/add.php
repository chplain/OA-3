<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 发送短消息</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=receive&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.receiveperson.value=="")
   { alert("接收人不能为空！");
     document.save.receiveperson.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("内容不能为空！");
     document.save.content.focus();
     return (false);
   }   
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
</script>
<form name="save" method="post" action="?ac=add&do=save&fileurl=sms">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent" width="15%"> 接收人：<? get_helps()?></td>
      <td class="TableData">
        
	<?php
	  get_pubuser(2,"receiveperson","","+选择接收人",60,3)
	  ?>
    <tr>
      <td nowrap class="TableContent">内容：<? get_helps()?></td>
      <td class="TableData"><textarea name="content" cols="70" rows="8" class="InputAreaStyle"></textarea> 
      </td>
    </tr>
   <tr>
      <td nowrap class="TableContent"> 附件文档：</td>
      <td class="TableData">
<?php echo public_upload('appendix','')?>
      </td>
    </tr>
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
     <input type="button" name="Submit" value="发送短消息" class="BigButton" onclick="sendForm();">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
