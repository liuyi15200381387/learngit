<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美容美发有限公司-新闻中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="top1">
  <!--导航-->
  <div class="nav">
     <a href=""><img src="images/logo.png"/></a>
     <div class="nav-r">
        <p>上海玛克西姆<br />有限公司</p>
        <ul>
           <li><a href="index.php">首　　页<br /><span>The home page</span></a></li>
           <li><a href="AboutUs.php">关于我们<br /><span>About us</span></a></li>
           <li><a href="PressCenter.php">新闻中心<br /><span>News Center</span></a></li>
           <li><a href="ProductCenter.php">产品中心<br /><span>Product Center</span></a></li>
           <li><a href="contactus.php">联系我们<br /><span>Contact us</span></a></li>
           <li class="on"><a href="loginbar.php">用户中心<br /><span>User center</span></a></li>
        </ul>
     </div>
  </div>
  <div class="top-Content">
      <!--banner-->
      <div id="banner">
            <ul>
                <li><a href="index.php"><img src="images/sy-1-nr.png" /></a></li>
                <li><a href="AboutUs.php"><img src="images/gywm-1.png"/></a></li>
                <li><a href="PressCenter.php"><img src="images/xwzx-1.png" /></a></li>
            </ul>
            <div id="num">
                <span class="on"></span>
                <span></span>
                <span></span>
            </div>
      </div>
  </div>
</div>
<!--内容1-->
<div class="main01">
   <div class="main01-box">
       <p>新闻中心<br /><em>News Center</em></p>
       <ul>
           <li class="on3"><a href="">公司新闻</a><img src="images/gywwm-5.png" /></li>
           <li><a href="">企业文化</a></li>
           <li><a href="">按摩服务</a></li>
           <li class="on4"><a href="">化妆美容</a></li>
       </ul>
   </div>
</div>
<!--内容2-->
<div class="main02">
   <div class="main02-box box-2">
       <ul>
        <?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $pagesize=10;
      $result=mysql_query("select * from tb_newscenter");
      $rows=mysql_num_rows($result);
      $pages=ceil($rows/$pagesize);
      if(isset($_GET['page'])){
        $page=intval($_GET['page']);
      }else{
        $page=1;
      }
      $offset=$pagesize*($page-1);
      $sql=mysql_query("select * from tb_newscenter order by timess desc limit $offset,$pagesize");
      $info=mysql_fetch_array($sql);
      if($info){
        do{
      ?>
          <li><a href="Newsdetails.php"><?php echo $info['nr'];?></a><span><?php echo $info['timess'];?></span></li>
      <?php
        }while($info=mysql_fetch_array($sql));
      }
      ?>

       </ul>
       <div class="Jump">

          全部共有<font color='red'><?php echo $rows;?></font>条记录&nbsp;当前为第<font color='red'><?php echo $page;?></font>页/共<font color='red'><?php echo $pages;?></font>页
        <a href=PressCenter.php?page=1>首页</a>
        <a href=PressCenter.php?page=<?php if($page!=1){echo $page-1;}else{echo $page;}?>>上一页</a>
        <?php
          for($i=1;$i<=$pages;$i++){
        ?>
              <a href=PressCenter.php?page=<?php echo $i ;?>><?php echo $i;?></a>
        <?php
          }
        ?>
        <a href=PressCenter.php?page=<?php if($page!=$pages){echo $page+1;}else{echo $pages;}?>>下一页</a>
        <a href=PressCenter.php?page=<?php echo $pages;?>>尾页</a>
        <span>跳转到</span><select name='select' onchange="window.location.href=this.value">
          <option value='1' checked>请选择</option>
          <?php
          for($i=1;$i<=$pages;$i++){
          ?>
          <option value=PressCenter.php?page=<?php echo $i;?>>第<?php echo $i;?>页</option>
          <?php
        }
          ?>
        </select>
       </div>
   </div>
</div>
<!--尾部-->
<div class="tail1">
     <ul>
        <li><a href="AboutUs.html">关于我们</a></li>
        <li><a href="contactus.html">联系我们</a></li>
        <li><a href="myoffice/guanlilogin.php">后台管理</a></li>
        <li><a href="">营销中心</a></li>
        <li><a href="">手机DKY</a></li>
        <li><a href="">友情链接</a></li>
        <li class="on2"><a href="">销售联盟</a></li>
     </ul>
</div>
<div class="tail2">
    <h1><img src="images/zx.png" /><span>友情链接</span><img src="images/yx.png" /></h1>
    <ul>
       <li class="microblog"><a href=""></a></li>
       <li class="WeChat"><a href=""></a></li>
       <li class="iphone"><a href=""></a></li>
       <li class="Android"><a href=""></a></li>
    </ul>
</div>
<div class="tail3">
   <p>版权所有 粤ICP备06037578号-2</p>
</div>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
