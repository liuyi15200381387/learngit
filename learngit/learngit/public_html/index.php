<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美容美发有限公司-首页</title>
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
      <?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $sql=mysql_query('select * from tb_meirong where id>11');
      $info=mysql_fetch_array($sql);
      do{
       ?>
                <li><img src=<?php echo $info['nr'];?> /></a></li>
      <?php
      }while($info=mysql_fetch_array($sql))
      ?>
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
<div class="main1">
    <div class="main1-Content1">
       <div class="Content1-top">
          <div class="Content1-top-l"></div>
          <div class="Content1-top-m">
               <p>公司简介</p>
          </div>
          <div class="Content1-top-r"></div>
        </div>
        <div class="Content1-bottom">
            <img src="images/sy-1.jpg" class="z" />
            <p><span>Company profile</span><br />株式会社マキシム（MAXIM) (MAXIM CORPORATION)创业于1978年，是一家具有三十余年历史的,代表潇洒派的人气个人形象设计企业。长期以来，MAXIM致力于企业文化和技术队伍的建设，以培养德才兼备、对顾客诚实无虚的员工。服务社会与美化生活,引导美发美容时尚新潮流为一贯追求目标，以诚信交易为企业宗旨。『用我们灵巧的双手，将每一位嘉宾打扮的美丽得体，令其从中感受到生活的美好和对爱美的自信，我们同时也在共同创造美的过程中体味到职业的崇高和达成感的满足』,这就是MAXIM发型师的使命。</p>
            <img src="images/2wm.jpg" class="r" />
        </div>
    </div>
</div>
<!--内容2-->
<div class="main2">
    <div class="main2-Content2">
        <div class="Content2-top">
          <div class="Content2-top-l"></div>
          <div class="Content2-top-m">
              <p>每日一新</p>
          </div>
          <div class="Content2-top-r"></div>
         </div>
         <div id="slide">
             <a href="javascript:" id="left"></a>
             <a href="javascript:" id="right"></a>
             <div id="slideBox">
                <div id="ul">
                    <ul>
                    <?php
     
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $sql=mysql_query('select * from tb_meirong where id<5');
      $info=mysql_fetch_array($sql);
      do{
       ?>
                        <li><a href="#"><img src=<?php echo $info['nr'];?> /></a><p><span><?php echo $info['nr1'];?></span><br /><?php echo $info['nr2'];?></p></li>
                    <?php
                      }while($info=mysql_fetch_array($sql))
                      ?>
                     </ul>
                     <ul>
      <?php
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $sql=mysql_query('select * from tb_meirong where id>4 and id<9 ');
      $info=mysql_fetch_array($sql);
     do{
      ?>
                     
                        <li><a href=""><img src=<?php echo $info['nr'];?> /></a><p><span><?php echo $info['nr1'];?></span><br /><?php echo $info['nr2'];?></p></li>
    <?php
      }while($info=mysql_fetch_array($sql))
    ?>
                    </ul>
                </div>
             </div>
          </div>
    </div>
</div>
<!--内容3-->
<div class="main3">
    <div class="main3-Content3">
        <div class="Content3-top">
          <div class="Content3-top-l"></div>
          <div class="Content3-top-m">
              <p>造型展示</p>
          </div>
          <div class="Content2-top-r"></div>
        </div>
        <div class="content3">
            <img src="images/sy-huang-5.png" />
            <ul>
      <?php
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $sql=mysql_query('select * from tb_meirong where id>8 and id<=11');
      $info=mysql_fetch_array($sql);
      do{
      ?>
                <li>
                    <img src=<?php echo $info['nr'];?> />
                    <div class="content">
                    	<h1><a href="#"><span><?php echo $info['nr1'];?></span></a></h1>
                        <p><?php echo $info['nr2'];?></p>
                    </div>
                </li>
      <?php
      }while($info=mysql_fetch_array($sql))
      ?>   
            </ul>
        </div>
    </div>
</div>
<!--尾部-->
<div class="tail1">
     <ul>
        <li><a href="AboutUs.php">关于我们</a></li>
        <li><a href="contactus.php">联系我们</a></li>
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
