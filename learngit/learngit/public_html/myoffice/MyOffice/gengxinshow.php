<?php
	session_start();
	header('content-type:text/html;charset=utf-8');
	$link=@mysql_connect('localhost','root','');
	 mysql_select_db('e00615080226',$link);
	 mysql_query('set names utf8');
	if($_POST['sub']=='确定'){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$ids=$_SESSION['ids'];
		$sql=mysql_query("update tb_login set user='$user',pass='$pass' where id='$ids'");
		if($sql){
			echo "<script>
	 		alert('修改成功');
	 		window.location.href='userguanli.php';
	 	</script>";
		}
	}
?>