<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美容美发有限公司-登入页</title>
<link href="css/base.css" type="text/css" rel="stylesheet" />
<link href="css/loginbar.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="top-bg">
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
<!--内容-->
<div class="main">
     <div class="main-l">
         <img src="images/meinv_07.png" />
     </div>
     <div class="main-r">
        <p>登陆页</p>
       <form name='myform' method='post' action='denglu.php'>
             <table cellpadding="0" cellspacing="0" height="400">
                   <tr>
                       <td colspan="3" width="312" >用户名：</td>
                   </tr>
                   <tr>
                       <td colspan="3"><input type="text" class="a-1" name='user' /></td>
                   </tr>
                   <tr>
                       <td colspan="3"  width="312">密码：</td>
                   </tr>
                   <tr>
                       <td colspan="3"><input type="password"  class="a-2" name='pass' /></td>
                   </tr>
                   <tr>
                       <td colspan="3"  width="312" align="right"><a href="#" class="a1">忘记密码？</a></td>
                   </tr>
                   <tr>
                    <script type="text/javascript">
                      function a(){
                        if(myform.yanz.value!=myform.hyanz.value){
                          document.getElementById('ids').innerHTML="<font color='red'>验证码错误</font>";
                        }else{
                          document.getElementById('ids').innerHTML="";
                        }
                      }


                      function b(){
                        document.getElementById('ids').innerHTML="<font color='red'>输入正确验证码</font>";
                      }
                    </script>
                       <td colspan="3" height='40'><input type="text" class="search" value='验证码' name='yanz' onblur='a()' onfocus='b()'>
                       <input type='hidden' name='hyanz' value=''>
                       <script type="text/javascript">
                        var num1=Math.round(Math.random()*10000000);
                        var num=num1.toString().substr(0,4);
                        document.write("<img name=imgcode src='yancode.php?code="+num+"'>");
                        myform.hyanz.value=num;
                        function recode(){
                        var num1=Math.round(Math.random()*10000000);
                        var num=num1.toString().substr(0,4);
                        document.imgcode.src="yancode.php?code="+num;
                        myform.hyanz.value=num;
                        }
                       </script>
                      
                       <a href="javascript:recode()" class="a2">看不清　换一张</a></td>
                       
                  </tr>
                  <tr>
                    <td height='40'><span id='ids'></span></td>
                  </tr>
                   <tr>
                        <td><input type='submit' name='sub1' value='登录' class="login"></td>
                       
                   </tr>
                   <tr>
                       <td colspan="3" class="partner">使用合作网站账号登录：<a href="#" class="qq">QQ</a>　|　<a href="#" class="qq">微信</a></td>
                   </tr>
                   <tr>

                    <td colspan="3"  width="312" align='right'><a href="zhuce.php" class="regsiter">>立即注册</a>
                    
                    </td>
                       
                   </tr>

             </table>
       </form>
     </div>
</div>
</div>
<!--尾部-->
<div class="tail1">
     <ul>
        <li><a href="AboutUs.html">关于我们</a></li>
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
