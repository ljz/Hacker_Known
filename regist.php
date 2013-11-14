<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
</head>


<body>


<form method=post action="regist_func.php">
<table>
<tr>
<td>邮箱</td>
<td><input type=text name=email value="<?php echo $_POST["email"] ?>"   ><br/></td>
</tr>

<tr>
<td>昵称</td>
<td><input type=text name=nickname value="<?php echo $_POST["nickname"] ?>"   ><br/></td>
</tr>
<tr>
<td>密码</td>
<td><input type=password    name=password1></td>
</tr>
<tr>
<td>确认密码</td>
<td><input type=password    name=password2></td>
</tr>
<tr id = gender>
<th>性别</th>
<td>
<input type="radio" name="gender" value="1" id=gender_1 >
<label for=gender_1>男</label>
&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender" value="2" id=gender_2 >
<label for=gender_2>女</label>
<span class="nodisp">请选择性别</span>
</td>
</tr>
<tr id= area>
<th>居住地区</th>
<td>
<select onchange="showcity(this.value, document.getElementById('userCity'));" name="province" id="userProvince">
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
<select name="city" id="userCity"></select>
<script src="js/getcity.js"></script>

<span class="nodisp">请选择您所在的地区</span>
</td>
</tr>
<tr>
<td><input type=submit value= 注册新用户></td>
</tr>
</table>
</form>




</form>


</body>


</html>
