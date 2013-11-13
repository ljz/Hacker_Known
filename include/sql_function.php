<?
class sql_function
{
	//获取数据库句柄
	function getDatabaseHandle()
	{
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
	}
	//登录函数,两个参数依次为昵称和密码，登录成功返回1，否则返回1
	function login($NickName ,$password)
	{
		$password = md5($password);
		$con = getDatabaseHandle();
		mysql_select_db("Hacker_Known", $con);
		$result = mysql_query("SELECT Password FROM HK_User_Info where NickName='".$NickName."'");
		while($row = mysql_fetch_array($result))
		{
			if($row['Password'] ==  $password )
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	function logout()
	{
	






	}























	//注册函数，传惨依次为邮箱，密码，密码,成功返回1，否则返回0.
	function regestion($email,$nickname,$password1,$password2,$sex,$area)
	{


		$con = getDatabaseHandle();
		mysql_select_db("Hacker_Known", $con);
		//	$result = mysql_query("SELECT Password FROM HK_User_Info where NickName='".$NickName."'"); 	

		//判断邮箱格式
		$mode="/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";
		if(!preg_match($mode,$email,$content))
		{
			alert("输入的邮箱格式不正确，请从新输入");
			return 0;
		}
		//判断邮箱是否已经存在	
		$result = mysql_query("SELECT UID FROM HK_User_Info where Email=".$email.""); 	
		if($result)
		{
		alert("该邮箱已经存在");
		return 0;
		}
		//判断昵称是否符合规范
		if(!preg_match('/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u',$nickname))
		{
			alert("输入的用户昵称不符合规范");
			return 0;
		}
		
		//判断密码是否一致，长度是否为8
		if($password1 != $password2 || strlen($password1)!=8)
		{
			alert("密码不一致,或者长度不为8");
			return 0;	
		}
		//判断性别
		if(1!=$sex && 2!= $sex)
		{
		 alert("请选择性别");
		return 0;
		}
		//判断地区是否填写
		if(!$area)
		{
		 alert("请填写你所在的省市");
		return 0;
		}
		



			mysql_select_db("Hacker_Known",$con);
		if(mysql_query("INSERT  INTO HK_User_Info( Email,NickName,Password,Sex,Area ) 
				VALUES('".$email."','".$nickname."','".md5($password)."','".$sex."','".$area."')"))
		{
			alert("注册成功，请去完善自己的资料");
			return 1;
		}
		else
		{		
			alert("由于不明原因，你注册失败了！请仔细检查。");
			return 0;
		}		
		mysql_close($con);
	}




































}

?>
