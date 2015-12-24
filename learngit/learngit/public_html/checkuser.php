<?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $username=$_GET['x'];
      $sql=mysql_query("select * from tb_login where user=\"$username\"");
      $result=mysql_fetch_array($sql);
      if($result){
      	echo "<font color='red'>".$username."</font>用户名已经存在";
      }else{
      	echo "<font color='red'>".$username."</font>用户名未注册";
      }
?>