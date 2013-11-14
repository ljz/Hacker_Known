<?
header("Content-Type: text/html; charset=utf8");
include "sql_function.php";
$mysql_function = new sql_function;
echo "<br/>pst_nickname=".$_POST["nickname"];
echo "<br/>pst_password1=".$_POST["password1"];
echo "<br/>pst_password2=".$_POST["password2"];
echo "<br/>pst_email=".$_POST["email"];
echo "<br/>pst_gender=".$_POST["gender"];
echo "<br/>pst_province=".$_POST["province"];

if(count($_POST)>0)
{
	echo "123";
	if(
			isset($_POST["nickname"])
			&&isset($_POST["password1"])
			&&isset($_POST["password2"])
			&&isset($_POST["email"])
			&&isset($_POST["gender"])
			&&isset($_POST["province"])
			&&($_POST["password1"]==$_POST["password2"])
	  )
	{
		echo 211;
		if($mysql_function->registion($_POST["email"],$_POST["nickname"],$_POST["password1"],$_POST["password2"],$_POST["gender"],$_POST["proince"]) )
		{
			echo "success";
		}
		else
		{
			echo "Something was wrong...";
		}
	}
	else
	{
		echo "qwer";
	}
}
else
{
	echo "null";
}
?>
