<?php
	 session_start();
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $id=$_GET['id'];
      $_SESSION['ids']=$id;
      $sql=mysql_query("select * from tb_productdetails where id=$id");
      $info=mysql_fetch_array($sql);
?>
<style type="text/css">
body{ background: url(1413012235-43G.png)}
table{ margin-top: 100px}
table tr th{ color: #FFF}
</style>
<form name='myform' method='post' action="pgengxin1.php" enctype='multipart/form-data'>
	<table border='1' bordercolor='red' cellspadding='0' cellspacing='0' align='center'>
		<tr>
 				<TH class=gridViewHeader scope=col>图片</TH>
                  <TH class=gridViewHeader scope=col>主题</TH>
                  <TH class=gridViewHeader scope=col>内容</TH>
        </tr>

		<tr>
			<td>
				<img src="../../<?php echo $info['pic'];?>">
				<p>
				<input type='file' name='file' ></td>
				
			<td ><textarea name='nr1' cols='30' rows='5'><?php echo $info['nr1'];?></textarea></td>
			<td ><textarea name='nr2' cols='60' rows='10'><?php echo $info['nr2'];?></textarea></td>
			<td><input type='submit' name='sub' value='更新'><td>
		</tr>
	</table>
</form>
