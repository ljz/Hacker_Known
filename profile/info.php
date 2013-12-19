<?
include "../sql_function.php";
$mysql_function = new sql_function;
session_start();
if($_SESSION["EMAIL"])
{
        $mysql_function->select_all($_SESSION["EMAIL"]);
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
<script  src=../js/jquery-1.10.2.js></script>
<script src= ../js/YMDClass.js></script>
<script src= ../js/jquery.cityselect.js></script>
<script src= ../js/jquery.cityselect.js></script>
</head>

<body>
<form  action=profile_func.php method="POST">
<table>
<tbody>


<tr><th>头像</th><td><img src="<?echo $mysql_function->Info_Photo;?>" width=110 height=120></td></tr>

<tr><th>邮箱</th><td><?echo $mysql_function->Info_Email;?></td></tr>

<tr><th>昵称</th><td><input type="text" name="nickname" size="20" maxlength="10" class="TEXT" value=<?   echo $mysql_function->Info_NickName ?> ><span class="Info" id="name_msg">不能超过10个字</span></td></tr>

<tr><th>性别</th><td><input type="radio" name="gender" value="1" checked="<?echo ( $mysql_function->Info_Sex = 1 ? true:false )?>" >男<input type="radio" name="gender" value="2" ecked="<?echo ( $mysql_function->Info_Sex = 2 ? true:false )?>">女</td></tr>

<tr>

<th>居住地区</th>
<th>
<div id="city"> <select class="prov"><option>省份</option></select> <select class="city" disabled="disabled"><option>地级市</option></select> <select class="dist" disabled="disabled"><option>市、县级市、县</option></select></div> 
</th>
<?$Area_elements=explode("-",$mysql_function->Info_Area);//提取地点的各个成分?>
<script>
$("#city").citySelect(); 
$("#city").citySelect({  
prov:"<?echo $Area_elements[0];?>", //省份 
city:"<?echo $Area_elements[1];?>", //城市 
dist:"<?echo $Area_elements[2];?>", //区县 
nodata:"none" //当子集无数据时，隐藏select 
});  
</script>
</tr>
<?$Birthday_elements=explode("-",$mysql_function->Info_Birthday);//提取地点的各个成分?>
<tr>
<th> 出生年月 </th>
<th><div><select name="year1"></select><select name="month1"></select> <select name="day1"></select></div></th>
<script> new YMDselect('year1','month1','day1',<?echo $Birthday_elements[0].','.$Birthday_elements[1].','.$Birthday_elements[2];?>); </script>
</tr>
<?echo $mysql_function->Info_Signature?>
<tr>
<th>个性签名<br>不超过100字</th>		
<td><textarea name="signature" rows="30" cols="20" >  <?echo $mysql_function->Info_Signature ;?> 
</textarea></td>    		
</tr>

<tr>
<td><input type="submit" value="保存修改" class="BUTTON SUBMIT"></td>
</tr>




</tbody>
</table>
</form>
</div>

<body>

</html>
