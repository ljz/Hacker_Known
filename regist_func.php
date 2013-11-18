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
	//	$uid=$mysql_function->;
/*
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
		mysql_select_db("Hacker_Known", $con);
                mysql_query("set names 'GBK'");
		$result = mysql_query("SELECT UID  FROM  HK_User_Info where Email = '".$email."' ",$con);
		 while($row = mysql_fetch_array($result))
                {
		echo "你申请的帐号ID为：";
		echo $row["UID"];
                }*/
		   echo"<script language=javascript>";
		 echo"alert('注册成功，请重新登录:ID为：$uid');" ;
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
