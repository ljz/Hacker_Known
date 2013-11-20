<?
include "sql_function.php";
$mysql_function = new sql_function;
session_start();
if($_SESSION["EMAIL"])
{
	$mysql_function->select_all($_SESSION["EMAIL"]);
}
?>
<html>
<head> 
<title>完善个人资料</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function setTab(m,n){
	var menu = document.getElementById("tab"+ m).getElementsByTagName("li");   //获取标签组合
	var showDiv = document.getElementById("tabList"+ m).getElementsByTagName("div");    //获取内容组合
	for( var i=0;i<menu.length;i++){
		menu[i].className = i==n ?"on":"";
		showDiv[i].style.display = i==n?"block":"none";
	}
}
</script>

<?
include "area.html";
include "birthday.html";
?>
<script language="javascript">

function myfunc(){
setup();
Window_Load();
}
</script>
</head>
<body  onLoad="myfunc()";>
<div class="wid400">
<div class="tab" id="tab1">
<ul>
<li onclick=setTab(1,0) class="on">会员信息</li>
<li onclick=setTab(1,1)>联系信息</li>
<li onclick=setTab(1,2)>IT技能</li>
</ul>
</div>
<div class="tabList" id="tabList1">
<div class="one block">
<form  action=profile_func.php"" method="POST" style="display: block;">
<table>
<tbody>

<tr>
<th>头像</th>
<td>
<img src="<?echo  $mysql_function->Info_Photo ;?>" width=110 height=120>
</td>
</tr>


<tr>
<th>邮箱</th>		
<td>
<?echo $mysql_function->Info_Email;?>
</td>
</tr>
<tr>
<th>昵称</th>		
<td>
<input type="text" name="nickname" size="20" maxlength="10" class="TEXT" value=<?   echo $mysql_function->Info_NickName ?> >
<span class="Info" id="name_msg">不能超过10个字</span>
</td>
</tr>
<tr>
<th>性别</th>		
<td>
<input type="radio" name="gender" value="1" checked="<?echo ( $mysql_function->Info_Sex = 1 ? true:false )?>" >男
<input type="radio" name="gender" value="2" ecked="<?echo ( $mysql_function->Info_Sex = 2 ? true:false )?>">女
</td>	
</tr>
<tr>
<th>居住地区</th>	
<td>
<select name="prov" id="s1">
<option>省份</option>
</select>
<select name="city" id="s2">
<option>地级市</option>
</select>
<select name="county" id="s3">
<option>市、县级市、县</option>
</select>
</td>
</tr>

<tr>
<th> 出生年月 </th>
<td>
 <select id="ddlYear">
<option>年</option>
 </select>
      <select id="ddlMonth">
<option>月</option>

 </select>
      <select id="ddlDay">
<option>日</option>

 </select>
</td>
</tr>

<tr>
<th>个性签名<br>不超过100字</th>		
<td><textarea name="signature" style="width:300px;height:100px;" class="TEXT"></textarea></td>    		
</tr>
<tr>
<th></th>		
<!--tr>
<th></th>		
<td><input type="checkbox" name="notify" value="1" checked="checked"> 有回复或者关注软件的新闻发布时邮件提醒我 </td>    	
</tr-->
<tr><ith colspan="2"></th></tr>
<tr class="submit">
<th></th>
<td><input type="submit" value="保存修改" class="BUTTON SUBMIT"></td>
</tr>
</tbody></table>
</form>

</div>
<div class="one" style="display:none">




<form id="ContactForm" class="AutoCommitJSONForm" action="/action/profile/update_contact_info" method="POST" style="display: block;">
<input type="hidden" name="user_code" value="a91ohvMoa6n3r9LlIXJHoCM5jU2LxWc3foRYS7Fs">
<table>

<tbody><tr>
<th>联系电话</th>		
<td><input type="text" name="tel" size="20" value="" class="TEXT">&nbsp;&nbsp;
<input type="checkbox" name="open_tel" value="1"> 对外公开
</td>    		
</tr>
<tr>
<th>邮箱地址</th>
<td>
<input type="text" id="f_email" name="email" value="" size="40" class="TEXT">&nbsp;&nbsp;
<input type="checkbox" name="open_email" value="1"> 对外公开
<a href="javascript:;" onclick="javascript:$('#f_email').val('964697423@qq.com');$('#f_msn').focus();">使用跟帐号相同Email地址</a>
</td>		
</tr>
<tr>
<th>MSN</th>		
<td><input type="text" id="f_msn" name="msn" size="40" class="TEXT" value=""></td>    		
</tr>
<tr>
<th>QQ</th>		
<td><input type="text" name="qq" size="20" class="TEXT" value=""></td>    		
</tr>
<tr>
<th>我的其他网站</th>		
<td><input type="text" name="website" size="40" class="TEXT" value=""></td>    		
</tr>
<tr><th colspan="2"></th></tr>
<tr class="submit">
<th></th>	
<td>
<input type="submit" value="保存修改" class="BUTTON SUBMIT">
<input type="reset" class="BUTTON">
</td>
</tr>
</tbody></table>
</form>




</div>
<div class="one" style="display:none">




<form id="SkillForm" class="AutoCommitJSONForm" action="/action/profile/update_skill_info" method="POST" style="display: block;">
<input type="hidden" name="user_code" value="a91ohvMoa6n3r9LlIXJHoCM5jU2LxWc3foRYS7Fs">
<div class="FormSection">
<strong>我是一名：</strong>
<select id="resume_industry" name="job">
<option value="1" selected="">程序员 </option>
<option value="2">高级程序员 </option>
<option value="3">技术主管 </option>
<option value="4">项目经理 </option>
<option value="5">产品经理 </option>
<option value="6">网页/平面设计</option>
<option value="7">架构师 </option>
<option value="8">部门经理 </option>
<option value="9">QA/测试工程师</option>
<option value="10">系统管理员 </option>
<option value="11">数据库管理员 </option>
<option value="12">售前工程师</option>
<option value="13">个人站长 </option>
<option value="14">CTO(技术副总裁)</option>
<option value="15">人事招聘</option>
<option value="0">其他</option>
</select>
<strong>工作年限：</strong>
<select id="resume_workyear" name="work_years">
<option value="100" selected="">在读学生</option>
<option value="101">应届毕业生</option>
<option value="1">1年以上</option>
<option value="2">2年以上</option>
<option value="3">3年以上</option>
<option value="5">5年以上</option>
<option value="10">10年以上</option>
</select>
</div>
<div class="FormSection">
<strong>目前状态：</strong>
<input type="radio" name="job_status" id="job_status_1" value="1"><label for="job_status_1">在职</label>
<input type="radio" name="job_status" id="job_status_2" value="2" checked=""><label for="job_status_2">学生</label>
<input type="radio" name="job_status" id="job_status_3" value="3"><label for="job_status_3">找工作中...</label>
</div>
<div class="FormSection">
<strong>工作单位：</strong>
<input type="text" name="company" value="<?echo "hello world"?>" size="30">
</div>
<div class="FormSection Langs">
<strong>熟悉的开发平台：（最多选5个）</strong>
<ul style="overflow:hidden;">
<li>		<input type="checkbox" id="cb_lang_1" name="lang" value="1">
<label for="cb_lang_1">Java EE</label>
</li>
<li>		<input type="checkbox" id="cb_lang_2" name="lang" value="2">
<label for="cb_lang_2">Java SE</label>
</li>
<li>		<input type="checkbox" id="cb_lang_5" name="lang" value="5">
<label for="cb_lang_5">J2ME/K-Java</label>
</li>
<li>		<input type="checkbox" id="cb_lang_21" name="lang" value="21">
<label for="cb_lang_21">HTML/CSS</label>
</li>
<li>		<input type="checkbox" id="cb_lang_3" name="lang" value="3">
<label for="cb_lang_3">Android</label>
</li>
<li>		<input type="checkbox" id="cb_lang_4" name="lang" value="4">
<label for="cb_lang_4">iOS/Objective-C</label>
</li>
<li>		<input type="checkbox" id="cb_lang_23" name="lang" value="23">
<label for="cb_lang_23">Windows Phone</label>
</li>
<li>		<input type="checkbox" id="cb_lang_22" name="lang" value="22">
<label for="cb_lang_22">Linux/Unix</label>
</li>
<li>		<input type="checkbox" id="cb_lang_6" name="lang" value="6">
<label for="cb_lang_6">C/C++</label>
</li>
<li>		<input type="checkbox" id="cb_lang_7" name="lang" value="7">
<label for="cb_lang_7">PHP</label>
</li>
<li>		<input type="checkbox" id="cb_lang_8" name="lang" value="8">
<label for="cb_lang_8">Perl</label>
</li>
<li>		<input type="checkbox" id="cb_lang_9" name="lang" value="9">
<label for="cb_lang_9">Python</label>
</li>
<li>		<input type="checkbox" id="cb_lang_10" name="lang" value="10">
<label for="cb_lang_10">Ruby</label>
</li>
<li>		<input type="checkbox" id="cb_lang_11" name="lang" value="11">
<label for="cb_lang_11">.NET/C#</label>
</li>
<li>		<input type="checkbox" id="cb_lang_12" name="lang" value="12">
<label for="cb_lang_12">ASP</label>
</li>
<li>		<input type="checkbox" id="cb_lang_13" name="lang" value="13">
<label for="cb_lang_13">Visual Basic</label>
</li>
<li>		<input type="checkbox" id="cb_lang_14" name="lang" value="14">
<label for="cb_lang_14">Groovy</label>
</li>
<li>		<input type="checkbox" id="cb_lang_15" name="lang" value="15">
<label for="cb_lang_15">Scala</label>
</li>
<li>		<input type="checkbox" id="cb_lang_16" name="lang" value="16">
<label for="cb_lang_16">JavaScript</label>
</li>
<li>		<input type="checkbox" id="cb_lang_17" name="lang" value="17">
<label for="cb_lang_17">ActionScript</label>
</li>
<li>		<input type="checkbox" id="cb_lang_18" name="lang" value="18">
<label for="cb_lang_18">Delphi/Pascal</label>
</li>
<li>		<input type="checkbox" id="cb_lang_19" name="lang" value="19">
<label for="cb_lang_19">ErLang</label>
</li>
<li>		<input type="checkbox" id="cb_lang_20" name="lang" value="20">
<label for="cb_lang_20">Lua</label>
</li>
<li>		<input type="checkbox" id="cb_lang_0" name="lang" value="0">
<label for="cb_lang_0">其他</label>
</li>
</ul>
</div>
<div class="FormSection Fields">
<strong>专长的领域：（最多选3个）</strong>
<ul style="overflow:hidden;">
<li>			<input type="checkbox" id="cb_field_1" name="field" value="1">
<label for="cb_field_1">WEB开发</label>
</li>
<li>			<input type="checkbox" id="cb_field_2" name="field" value="2">
<label for="cb_field_2">游戏开发</label>
</li>
<li>			<input type="checkbox" id="cb_field_3" name="field" value="3">
<label for="cb_field_3">手机软件开发</label>
</li>
<li>			<input type="checkbox" id="cb_field_4" name="field" value="4">
<label for="cb_field_4">桌面软件开发</label>
</li>
<li>			<input type="checkbox" id="cb_field_5" name="field" value="5">
<label for="cb_field_5">服务器端开发</label>
</li>
<li>			<input type="checkbox" id="cb_field_6" name="field" value="6">
<label for="cb_field_6">网页设计/UI/UED</label>
</li>
<li>			<input type="checkbox" id="cb_field_7" name="field" value="7">
<label for="cb_field_7">软件测试/QA</label>
</li>
<li>			<input type="checkbox" id="cb_field_8" name="field" value="8">
<label for="cb_field_8">软件开发管理</label>
</li>
<li>			<input type="checkbox" id="cb_field_9" name="field" value="9">
<label for="cb_field_9">运维/系统/网络管理</label>
</li>
<li>			<input type="checkbox" id="cb_field_10" name="field" value="10">
<label for="cb_field_10">DBA/数据库</label>
</li>
<li>			<input type="checkbox" id="cb_field_11" name="field" value="11">
<label for="cb_field_11">网站运营/站长</label>
</li>
<li>			<input type="checkbox" id="cb_field_12" name="field" value="12">
<label for="cb_field_12">人事招聘</label>
</li>
<li>			<input type="checkbox" id="cb_field_13" name="field" value="13">
<label for="cb_field_13">CTO/CEO/CXO</label>
</li>
<li>
<input type="checkbox" id="cb_field_0" name="field" value="0">
<label for="cb_field_0">其他领域</label>
</li>
</ul>
</div>
<div class="submit">
<input type="submit" value="保存修改" class="BUTTON SUBMIT">
<input type="reset" class="BUTTON">
</div>
</form>



</div>
</div>
</div>
</body>
</html>



