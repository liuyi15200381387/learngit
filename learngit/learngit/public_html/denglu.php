<?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      if($_POST['sub1']=='登录'){
      	$user=$_POST['user'];
      	$pass=$_POST['pass'];
      	$sql=mysql_query("select * from tb_login where user=\"$user\" and pass=\"$pass\"");
			$info=mysql_fetch_array($sql);
			if($info){
				echo "<script>
			
			window.location.href='index.php';
			</script>";
		}else{
			echo "<script>
			alert('账号或者密码错误，登陆失败');
			window.location.href='loginbar.php';
			</script>";
		}
      }
?>