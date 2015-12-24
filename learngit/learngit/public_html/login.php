<?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      if($_POST['sub1']=='注册'){
      	$user=$_POST['user'];
      	$pass=$_POST['pass'];
      	$pass1=$_POST['pass1'];
      	$yx=$_POST['yx'];
      	$tel=$_POST['tel'];
      	$dz=$_POST['dz'];
      	$sql=mysql_query("insert into tb_login(user,pass,pass1,yx,tel,dz) values('$user','$pass','$pass1','$yx','$tel','$dz')");
      	if($sql){
      		echo "<script>
			alert('注册成功');
			window.location.href='loginbar.php';
			</script>";
      	}
      }
?>