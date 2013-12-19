<?
class sql_function
{ 
	public $me=me;
	//获取数据库句柄
	public	function getDatabaseHandle()
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
	public	function login($email ,$password)
	{

		$password = md5($password);
		$con = $this->getDatabaseHandle();
		mysql_select_db("Hacker_Known", $con);
		$result = mysql_query("SELECT Password  FROM  HK_User_Info where Email = '".$email."' ",$con);
		while($row = mysql_fetch_array($result))
		{

			if($row['Password'] ==  $password )
			{
				mysql_close($con);
				return 1;
			}
			else
			{
				mysql_close($con);
				return 0;
			}
		}
	}


	//查询用户的详情

	public $Info_UID ,$Info_Photo,$Info_NickName,$Info_Email,$Info_Sex,$Info_Birthday,$Info_Area,$Info_Signature;
	public $Job_JobState,  $Job_workyear,$Job_Company,$Job_JobTitle;
	public $Cont_Email,$Cont_Phone,$Cont_QQ,$Cont_Website;
	public $Point_Point,$Tech_Tech_Sector,$Tech_Special_Sector;

	public function select_all($email)
	{
		$con = $this->getDatabaseHandle();
		mysql_select_db("Hacker_Known",$con);
		mysql_query("set names utf8");
 		$result = mysql_query("SELECT HK_User_Info.UID as Info_UID,  HK_User_Info.Photo as Info_Photo, HK_User_Info.NickName as Info_NickName, HK_User_Info.Email as Info_Email, HK_User_Info.Sex as Info_Sex, HK_User_Info.Birthday as Info_Birthday, HK_User_Info.Area as Info_Area, HK_User_Info.Signature as Info_Signature, HK_User_Job.Job_State  as Job_JobState, HK_User_Job.Work_Years as Job_workyear, HK_User_Job.Company as Job_Company, HK_User_Job.Job_Title as Job_JobTitle,HK_User_Cont.Email as Cont_Email,HK_User_Cont.Phone as Cont_Phone,HK_User_Cont.QQ as Cont_QQ,HK_User_Cont.Website as Cont_Website,HK_User_Point.Point as Point_Point,HK_User_Tech.Tech_Sector as Tech_Tech_Sector,HK_User_Tech.Special_Sector as Tech_Special_Sector    FROM  HK_User_Info ,HK_User_Job ,HK_User_Point,HK_User_Tech ,HK_User_Cont where  HK_User_Info.Email = '".$email."' and  HK_User_Info.UID = HK_User_Job.UID  and HK_User_Info.UID = HK_User_Point.UID and  HK_User_Info.UID = HK_User_Tech.UID and HK_User_Info.UID = HK_User_Cont.UID");
		while($row = mysql_fetch_array($result))
		{
			$this->Info_UID = $row["Info_UID"];
                        $this->Info_Photo=$row["Info_Photo"];
			$this->Info_NickName=$row["Info_NickName"];

			$this->Info_Email=$row["Info_Email"];
 			$this->Info_Sex=$row["Info_Sex"];
			$this->Info_Birthday=$row["Info_Birthday"];
		        $this->Info_Area=$row["Info_Area"];
			$this->Info_Signature=$row["Info_Signature"];
			$this->Job_JobState=$row["Job_JobState"];
			$this->Job_workyear=$row["Job_workyear"];
			$this->Job_Company=$row["Job_Company"];
			$this->Job_JobTitle=$row["Job_JobTitle"];
			$this->Cont_Email=$row["Cont_Email"];
			$this->Cont_Phone=$row["Cont_Phone"];
			$this->Cont_QQ = $row["Cont_QQ"];
			$this->Cont_Website=$row["Cont_Website"];
			$this->Point_Point=$row["Point_Point"];
			$this->Tech_Tech_Sector=$row["Tech_Tech_Sector"];
			$this->Tech_Special_Sector=$row["Tech_Special_Sector"];
		}


	}








	//注册函数，传惨依次为邮箱，密码，密码,成功返回1，否则返回0.
	function registion($email,$nickname,$password1,$password2,$sex,$area)
	{
		$con =$this->getDatabaseHandle();
		mysql_select_db("Hacker_Known", $con);
		mysql_query("set names 'GBK'");
		$result = mysql_query("SELECT UID  FROM  HK_User_Info where Email = '".$email."' ",$con);
		if(mysql_num_rows($result))
		{
			echo"<script language=javascript>";
			echo"alert('该邮箱已经存在');" ;
			echo 'location.href="regist.php"';
			echo "</script>";
			/*	 echo"<script language=javascript>";
				 echo "alert('该邮箱已经存在!');" ;
				 echo'location.href="regist.php"';
				 echo"</script>";	*/
			return 0;
		}
		else	
		{
			mysql_query("INSERT INTO  HK_User_Info (NickName,Email,Password,Sex,Area)VALUES('".$nickname."','".$email."','".$password1."','".$sex."','".$area."')",$con);
			return 1;
		}
		//		echo "insert ok";
		//		return 1;
		/*		$if(mysql_query("INSERT INTO  HK_User_Info (NickName,Email,Password,Sex,Area)VALUES('".$nickname.",'".$email."','".$password1."','".$sex."','".$area."')",$con);

				{
				echo " 注册失败!<br/>";
				return 0;
				}*/

		//判断邮箱格式
		//	$mode="/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";
		/*	if(!preg_match($mode,$email,$content))
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

		//判断密码是否一致，长度>6
		if($password1 != $password2 || strlen($password1)>6)
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
		 */
	}
}

?>
