<?php
 header('content-type:text/html;charset=utf-8');
	$savedir="../../images/".@$_FILES['file']['name'];
	if(move_uploaded_file(@$_FILES['file']['tmp_name'],$savedir)){
		require_once 'move.php';
		$addwater=new addwaterpress();
		$addwater->add($savedir,"dodi");
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
		 $file="images/".@$_FILES['file']['name'];
		 $nr=$_POST['txt'];
		 $sql=mysql_query("insert into tb_productcenter(pic,nr) values('$file','$nr')");
		 if($sql){
		 	echo "<script>
	 			alert('添加成功');
	 			window.location.href='chanpinshow.php';
	 			</script>";
		 }
	}
		
?>
<style type="text/css">
body{ background: url(1413012235-43G.png)}
table{ margin-top: 100px}
table tr th{ color: #FFF}
</style>
<form name='myform' method='post' action="<?php echo $_SERVER['PHP_SELF'];?>" enctype='multipart/form-data'>
	<table border='1' bordercolor='red' cellspadding='0' cellspacing='0' align='center'>
		<tr>
			<th>图片</th>
			<th>图片描述</th>
		</tr>
		<tr>
			<td><input type='file' name='file'></td>
			<td ><textarea name='txt' cols='60' rows='10'></textarea></td>
			<td><input type='submit' name='sub' value='添加'><td>
		</tr>
	</table>
</form>