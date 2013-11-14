<?
header("Content-Type: text/html; charset=utf8");
include "sql_function.php";
$mysql_function = new sql_function;
      if(isset($_POST["nickname"])
        &&isset($_POST["password1"])
        &&isset($_POST["password2"])
        &&isset($_POST["email"])
        &&isset($_POST["gender"])
        &&isset($_POST["province"])
        &&($_POST["password1"]==$_POST["password2"]))
 {
	 if($mysql_function->registion($_POST["email"],$_POST["nickname"],md5($_POST["password1"]),$_POST["password2"],$_POST["gender"],$_POST["proince"]) )
	{
	   echo"<script language=javascript>";
             echo"alert('注册成功，请重新登录');" ;
		echo 'location.href="login.php"';
		echo "</script>";
	}
	else
	{
	/* echo"<script language=javascript>";
             echo"alert('该邮箱已经存在');" ;
                echo 'location.href="regist.php"';
                echo "</script>";*/
	}
}      
