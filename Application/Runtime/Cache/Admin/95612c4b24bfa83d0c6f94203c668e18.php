<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
a span {color:#fff}
table.tbl tr td {padding:8px;}
table.tbl tr td input{  width:220px;}
table.tbl tr td.cd input{  width:20px;}
-->
</style>
  <script type="text/javascript" charset="utf-8" src="/thinkphp-season2/Public/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/thinkphp-season2/Public/ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" charset="utf-8" src="/thinkphp-season2/Public/ueditor/lang/zh-cn/zh-cn.js"> </script>

<script>
var  highlightcolor='#d5f4fe';
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
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo ADMIN_PUC;?>images/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 栏目添加</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <input type="checkbox" name="checkbox11" id="checkbox11" />
              全选      &nbsp;&nbsp;<img src="<?php echo ADMIN_PUC;?>images/add.gif" width="10" height="10" /> <a href="/thinkphp-season2/index.php/Admin/Category/add"><span>添加</span></a>   &nbsp; <img src="<?php echo ADMIN_PUC;?>images/del.gif" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="<?php echo ADMIN_PUC;?>images/edit.gif" width="10" height="10" /> 编辑   &nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
     <form action="" enctype="multipart/form-data" method="post">
      <table class="tbl" width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" onmouseover="changeto()"  onmouseout="changeback()">
      <!--<tr>-->
        <!--</div></td>-->
        <!--<td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">栏目ID</span></div></td>-->
        <!--<td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">栏目名称</span></div></td>-->
      <!--</tr>-->
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right" >栏目名称</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left"><input name="cate_name" type="text"/></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">英文名称</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left"><input name="cate_ename" type="text"/></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">关键字</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left"><input name="cate_keywords" type="text"/></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">栏目描述</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left"><textarea name="cate_desc" cols="30" rows="5"></textarea></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">缩略图</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left"><input name="cate_pic" type="file"/></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">栏目类型</td>
        <td class="cd" height="20" bgcolor="#FFFFFF" class="STYLE19" align="left">
          列表栏目<input type="radio" checked="checked" name="cate_type" value="1" />封面栏目<input type="radio" name="cate_type" value="0" />产品栏目<input type="radio" name="cate_type" value="2"/>
        </td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">上级栏目</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left">
          <select name="parentid">
            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cate_id"]); ?>"><?php echo str_repeat('-',$vo[level]*3); echo ($vo["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" align="right">栏目内容</td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left">
          <textarea name="cate_content" id="content" ></textarea>
        </td>
      </tr>
      <tr>
        <td height="20" colspan="2" bgcolor="#FFFFFF" class="STYLE6" align="center"><input type="submit" value="确定增加" /></td>
        </td>
      </tr>


    </table>
     </form>

    </td>
  </tr>

</table>
</body>
<script>UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:500,});</script>
</html>