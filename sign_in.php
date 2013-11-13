<?php
header("Content-Type: text/html; charset=utf8");
$id = $_POST['NickName'];
$pwd = $_POST["password"];
$user = new User();
if($user->Login($id,$pwd))
{
session_start();
$_SESSION['uid'] = $id;
?>
<Script>
alert( "登录成功！");

window.self.location='./html/message_board.php';
</Script>
<?
}
else
{
?>
<Script>
alert('登录失败，请重试！');
window.self.location='./html/sign_in.html';
</Script>
<?
}
?>
