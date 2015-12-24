<?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      if(@$_POST['sub']=='添加'){
      $nr=@$_POST['nr'];
      $sql=mysql_query("insert into tb_newscenter(nr) values('$nr')");
      if($sql){
      		echo "<script>
	 			alert('添加成功');
	 			window.location.href='newsshow.php';
	 			</script>";
      	}
      	}
?>
<style type="text/css">
body{ background: url(1413012235-43G.png)}
table{ margin-top: 100px}
table tr th{ color: #FFF}
</style>
<body>
<form method='post' action='newstianjia.php'>
      <table border='1' bordercolor='red' cellspadding='0' cellspacing='0' align='center'>
            <tr>
                  <th>内容</th>
                  <th>操作</th>
            </tr>
            <tr>
	<td><textarea name='nr' cols='60' rows='10'></textarea></td>
	<td><input type='submit' name='sub' value='添加'></td>
       </tr>
      </table>
</form>
</body>