<?php 
session_start();

require "connect.inc.php";                           //如果提交表单就链接数据库验证
if(isset($_POST['sub']))                            //使用从表单中接收到的用户名和密码，作为在user表中的查询条件
{       $stmt=$pdo->prepare("SELECT id,username FROM user WHERE username=? and userpwd=?");
	$stmt->execute(array($_POST["username"],md5($_POST["password"]) ));

	if ($stmt->rowCount()>0) 
	{
		$_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);   //将用户信息注册进入session
		$_SESSION["isLogin"]=1;                    //注册用于判断登陆的成功的session变量
		header("Location:index.php");
	}
	else
	{
		echo '<font color="red">用户名或密码错误</font>';
	}
	//session_destroy();
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>邮件登录系统</title>
	<style>
	div span{width:100px;text-align:right;}

	</style>
</head>
<body>
	 <p>欢迎来到邮件系统：ｓｅｓｓｉｏｎ　ＩＤ <?php echo session_id(); ?></p>

	 <form action="login.php" method="post">
	 	<span>用户名：<input type="text" name="username"><br></span><br>
	 	<span>密　码：<input type="password" name="password"><br></span><br>
	 	<input type="submit" name="sub" value="登陆"></input>

	 </form>

</body>
</html>


 
