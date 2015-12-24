<?php
 header('content-type:text/html;charset=utf-8');
  			$link=@mysql_connect('localhost','root','');
            mysql_select_db('e00615080226',$link);
            mysql_query('set names utf8');
            if(@$_POST['sub']=='添加'){
 	if(!empty($_FILES['file']['name'])){
 		$filename=$_FILES['file']['name'];
 		$filetmpname=$_FILES['file']['tmp_name'];
 		for($i=0;$i<count($filename);$i++){
 			if($filename[$i]!=''){
 				move_uploaded_file($filetmpname[$i], "../../images/".$filename[$i]);
 				$file="images/".$filename[$i];
 			
 				
 			}
 			}
 			
 			
 				$nr1=$_POST['nr1'];
 				$nr2=$_POST['nr2'];
 				$nr3=$_POST['nr3'];
 				$sql=mysql_query("insert into tb_newsdetails(nr1,nr2,nr3,pic1,pic2)
 					values('$nr1','$nr2','$nr3',\"$file\",\"$file\")");
 				if($sql){
 					echo "<script>
	 			alert('添加成功');
	 			window.location.href='newsallshow.php';
	 			</script>";
 				}
 			
 		
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
			<TH >标题</TH>
            <TH >发布时间</TH>
            <TH >内容</TH>
            <TH >图片1</TH>
            <TH >图片2</TH>
		</tr>
		<tr>
			<td><textarea cols='10' rows='5' name='nr1'></textarea></td>
			<td><textarea cols='10' rows='5' name='nr2'></textarea></td>
			<td><textarea cols='30' rows='5' name='nr3'></textarea></td>
			<td><input type='file' name='file[]'></td>
			<td><input type='file' name='file[]'></td>
			<td><input type='submit' name='sub' value='添加'><td>
		</tr>
	</table>
</form>