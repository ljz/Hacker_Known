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
<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
</head>
<body>
<a href=./profile/info.php> 修改个人信息</a>
<br/>
<a href=./profile/contact.php> 修改联系方式</a>
<br/>
<a href=./profile/it_skill.php> 修改IT技能</a>
</body>
</html>
