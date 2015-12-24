<?php
		
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $id=$_GET['id'];
      	$sql=mysql_query("delete from tb_newscenter where id=$id");
      	if($sql){
      		echo "<script>
	 			alert('删除成功');
	 			window.location.href='newsgengxinshanchu.php';
	 			</script>";
      	}
?>