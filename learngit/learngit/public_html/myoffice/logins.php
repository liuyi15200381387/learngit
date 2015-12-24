<?php
	session_start();
	header('content-type:text/html;charset=utf-8');
	$dbms='mysql';
	$dbname='e00615080226';
	$users='root';
	$passs='';
	$host='localhost';
	$dsn="$dbms:host=$host;dbname=$dbname";
	$pdo=new PDO($dsn,$users,$passs);
	
	 if(@$_POST['sub']=='登录')
	 {
	 	$user=$_POST['user'];
	 	$rem=@$_POST['rem'];
	 	$pass=$_POST['pass'];
	 	$yz=$_POST['yz'];
		$pdo->query('set names utf8');
	 	$sql="select * from tb_login where user='$user' and pass='$pass'";
	 	$re=$pdo->prepare($sql);
	 	$re->execute();
	 	$res=$re->fetchAll(PDO::FETCH_NUM);
	 	 if($_SESSION['id']==$yz)
	 	{
	 		if($res)
	 		{
	 			if($rem==1){
	 				setcookie('user',$user,time()+60);
	 				setcookie('pass',$pass,time()+60);
	 				setcookie('rem',$rem,time()+60);
	 			}else{
	 				setcookie('user',$user,time()-60);
	 				setcookie('pass',$pass,time()-60);
	 				setcookie('rem',$rem,time()-60);
	 			}
	 			echo "<script>
	 			 window.location.href='index.php';
	 			</script>";
	 		}
	 		else
	 		{
	 			echo "<script>
	 			alert('用户名或者密码错误，请重新登陆');
	 			window.location.href='guanlilogin.php';
	 			</script>";
	 			echo 'no';
	 		}
	 	}
	 	else
	 	{
	 		echo "<script>
	 		alert('验证码错误');
	 		window.location.href='guanlilogin.php';
	 			</script>";
	 	}
	 }
?>