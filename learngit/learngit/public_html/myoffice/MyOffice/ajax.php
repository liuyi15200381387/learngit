<?php
	header("content-type:text/html;charset=utf-8");
	$link=@mysql_connect('localhost','root','');
	mysql_select_db('e00615080226',$link);
	mysql_query('set names utf8');
	$user=$_GET['user'];
	if($user==''){
		echo '不能为空';
	}else{
	$sql=mysql_query("select * from tb_login where user='$user'");
	$info=mysql_fetch_array($sql);
	if($info)
	{
		echo "用户名已存在";
	}else
	{
		echo "用户名可用";
	}
}
?>