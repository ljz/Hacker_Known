<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        *{margin:0; padding:0;font-size:12px;}
        body{ padding-top:20px; padding-left:20px;}
        .wid240{ width:242px; margin-bottom:20px;}
        .wid180{ width:182px;}
        .tab{ border:1px solid #000;}
        .tab ul{ clear:both; zoom:1;}
        .tab ul:after{ content:""; visibility:hidden; display:block; height:0; clear:both;}
        .tab ul li{ background:#000; color:#fff; display:inline; float:left; width:60px; height:26px; line-height:26px; text-align:center; }
        .tab ul li.on{ background:#fff; color:#000;}
        .tabList{border:1px solid #000; border-top:none; height:150px;}
        .tabList .one{ padding:10px; color:#ff0000; display:none;}
        .tabList .block{ display:block;}
    </style>
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
 
<div class="wid180">
    <div class="tab" id="tab2">
        <ul>
        <li onclick=setTab(2,0) class="on">标签一</li>
        <li onclick=setTab(2,1)>标签二</li>
        <li onclick=setTab(2,2)>标签三</li>
        </ul>
    </div>
    <div class="tabList" id="tabList2">
        <div class="one block">内容一</div>
        <div class="one">内容二</div>
        <div class="one">内容三</div>
    </div>
</div>
</body>
</html>



	<form id="BasicForm" class="AutoCommitJSONForm" action="/action/profile/update_basic_info" method="POST" style="display: block;">
<input type="hidden" name="user_code" value="a91ohvMoa6n3r9LlIXJHoCM5jU2LxWc3foRYS7Fs">
<table>
	<tbody><tr>
		<th>登录帐号</th>		
		<td>
			<?echo 查数据库?>
						<!--a href="http://my.oschina.net/u/1398697/admin/change-email">更改邮箱地址</a-->
		</td>
	</tr>
	<tr>
		<th>昵称</th>		
		<td>
			<input type="text" name="name" size="20" maxlength="10" class="TEXT" value=<?   查数据库?> >
			<span class="Info" id="name_msg">不能超过10个字</span>
		</td>
	</tr>
	<tr>
    	<th>性别</th>		
		<td>
			<input type="radio" name="gender" value="1" checked="">男
			<input type="radio" name="gender" value="2">女
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
	<tr>
		<th></th>		
		<td><input type="checkbox" name="notify" value="1" checked="checked"> 有回复或者关注软件的新闻发布时邮件提醒我 </td>    	
	</tr>
	<tr><th colspan="2"></th></tr>
	<tr class="submit">
		<th></th>
		<td><input type="submit" value="保存修改" class="BUTTON SUBMIT"></td>
	</tr>
</tbody></table>
</form>

