<?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $zt=$_POST['zt'];
      $xm=$_POST['xm'];
      $tel=$_POST['tel'];
      $dz=$_POST['dz'];
      $ly=$_POST['ly'];
      if($_POST['sub']=='留言'){
      	$sql=mysql_query("insert into tb_connectus(zt,xm,tel,dz,ly) 
      		values('$zt','$xm','$tel','$dz','$ly')");
      	if($sql){
      		echo "<script>
      			alert('留言成功');
      			window.location.href='contactus.php';
      		</script>";
      	}
      }
?>