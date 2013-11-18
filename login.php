<?
include "sql_function.php";
$mysql_function = new sql_function;
session_start();
if(count($_POST)>0) 
	if(isset($_POST["email"])&&isset($_POST["password"])){  
		if(  $mysql_function->login( $_POST["email"],$_POST["password"] ) )
		{ 
			$_SESSION["EMAIL"] = $_POST["email"];  
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"])) ;  
			header("Location:http://$host$path/index.php");  
			exit;  
		}	
		else
		{  
			echo "Something was wrong...";   
		}  
	}  
?>

<html>
<head>
<meta charset=utf8>
<title>登录到黑白知道！！！</title>
</head>
<body>
<form method=post action="<?php echo $_SERVER["PHP_SELF"] ?>">
<table>
<tr>
<td>邮箱</td>
<td><input type=text name=email><br/></td>
</tr>
<tr>
<td>密码</td>
<td><input type=password    name=password></td>
<tr>
<tr>
<td><input type=submit value= 登录></td>
</tr>
</table>
</form>
</body>
</html>
