
<?
echo "124234";
include "sql_function.php";
$mysql_function = new sql_function;
session_start();
if($_SESSION["EMAIL"])
{
echo "<br/>SESSION=".$_SESSION["EMAIL"];
$mysql_function->select_all($_SESSION["EMAIL"]);
echo "<br/>select over";
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
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
</head>
<body>
 
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
                     <img src="img/head.JPG" width=110 height=120>
               </td>
        </tr>

	
	<tr>
		<th>邮箱</th>		
		<td>
			<?/*
			$con = mysql_connect("localhost","root","1qaz2wsx");
                if (!$con)
                {
                        die('Could not connect: ' . mysql_error());
                        return 0;
                }
                else
                {
                        return $con;
                }
*/
		// mysql_select_db("Hacker_Known", $con);
               // $result = mysql_query("SELECT Email  FROM  HK_User_Info where NickName = '".$_SESSION[]."' ",$con);


		//	echo $email= "964697423@qq.com";


			?>
		</td>
	</tr>
	<tr>
		<th>昵称</th>		
		<td>
			<input type="text" name="nickname" size="20" maxlength="10" class="TEXT" value=<?   echo "gege"?> >
			<span class="Info" id="name_msg">不能超过10个字</span>
		</td>
	</tr>
	<tr>
    	<th>性别</th>		
		<td>
			<input type="radio" name="gender" value="1" >男
			<input type="radio" name="gender" value="2"  >女
		</td>	
    </tr>
	<tr>
    	<th>出生年月</th>		
		<td>
			            <select name="y"><option value="0">--</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select> 年
            <select name="m"><option value="0">--</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select> 月
            <select name="d"><option value="0">--</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> 日
		</td>	
    </tr>
	<tr>
		<th>居住地区</th>		
		<td><select onchange="showcity(this.value, document.getElementById('userCity'));" name="province" id="userProvince">
	<option value="">--请选择省份--</option>
	<option value="北京">北京</option> 
	<option value="上海">上海</option> 
	<option value="广东">广东</option> 
	<option value="江苏">江苏</option> 
	<option value="浙江">浙江</option> 
	<option value="重庆">重庆</option> 
	<option value="安徽">安徽</option> 
	<option value="福建">福建</option> 
	<option value="甘肃">甘肃</option> 
	<option value="广西">广西</option> 
	<option value="贵州">贵州</option> 
	<option value="海南">海南</option> 
	<option value="河北">河北</option> 
	<option value="黑龙江">黑龙江</option> 
	<option value="河南">河南</option> 
	<option value="湖北">湖北</option> 
	<option value="湖南">湖南</option> 
	<option value="江西">江西</option> 
	<option value="吉林">吉林</option> 
	<option value="辽宁">辽宁</option> 
	<option value="内蒙古">内蒙古</option> 
	<option value="宁夏">宁夏</option> 
	<option value="青海">青海</option> 
	<option value="山东">山东</option> 
	<option value="山西">山西</option> 
	<option value="陕西">陕西</option> 
	<option value="四川">四川</option> 
	<option value="天津">天津</option> 
	<option value="新疆">新疆</option> 
	<option value="西藏">西藏</option> 
	<option value="云南">云南</option> 
	<option value="香港">香港特别行政区</option> 
	<option value="澳门">澳门特别行政区</option>
	<option value="台湾">台湾</option> 
	<option value="海外">海外</option>
</select>
<select name="city" id="userCity"><option value="东城">东城</option><option value="西城">西城</option><option value="朝阳">朝阳</option><option value="丰台">丰台</option><option value="石景山">石景山</option><option value="海淀">海淀</option><option value="门头沟">门头沟</option><option value="房山">房山</option><option value="通州">通州</option><option value="顺义">顺义</option><option value="昌平">昌平</option><option value="大兴">大兴</option><option value="平谷">平谷</option><option value="怀柔">怀柔</option><option value="密云">密云</option><option value="延庆">延庆</option></select>
<script src="/js/getcity.js"></script></td>
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
	<tr><th colspan="2"></th></tr>
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



