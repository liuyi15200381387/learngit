<?php
	session_start();
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      if($_POST['sub']=='更新'){
      	$nr=$_POST['nr'];
      	$id=$_SESSION['ids'];
      	$sql=mysql_query("update tb_newscenter set nr='$nr' where id=$id");
      	if($sql){
      		echo "<script>
	 			alert('更新成功');
	 			window.location.href='newsgengxinshanchu.php';
	 			</script>";
      	}
      }
?>