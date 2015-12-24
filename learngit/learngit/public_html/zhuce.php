<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美容美发有限公司-登入页</title>
<link href="css/base.css" type="text/css" rel="stylesheet" />
<link href="css/loginbar.css" type="text/css" rel="stylesheet" />
<link href="css/zhuce.css" type="text/css" rel="stylesheet"/>
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
     <div class="main-r1">
       
        <script type="text/javascript">
        function winopen(x){
            if(x==''){
                alert("请输入用户名");
                myform.user.focus();
                return false;
            }else{
                window.open("checkuser.php?x="+x,"newframe","width=300,height=100");
            }
        }


        function users(y){
        
                 a=/^[a-z]{1,20}[0-9]{1,20}$/;
                 var yhm=new RegExp(a);
                 result1=yhm.test(y);
                 if(!result1){
                  document.getElementById('ids2').innerHTML="<font color='red'>用户名格式不正确</font>";
                 }else{
                  document.getElementById('ids2').innerHTML="";
                 }
            
        }




               function mm(y){
            
                 a=/^[0-9a-zA-Z]{6}$/;
                 var yhm=new RegExp(a);
                 result1=yhm.test(y);
                 if(!result1){
                  document.getElementById('ids3').innerHTML="<font color='red'>密码格式不正确</font>";
                 }else{
                  document.getElementById('ids3').innerHTML="";
                 }
            
        } 

               function mm3(y){
                if(y==''){
                  document.getElementById('ids4').innerHTML="<font color='red'>不能为空</font>";
                }else{

                if(y!=myform.pass.value){
                    document.getElementById('ids4').innerHTML="<font color='red'>两次输入的密码不一样</font>";
                }else{
                  document.getElementById('ids4').innerHTML="";
                }
        } 
      }

          function yxx(y){
           
                 a=/^[0-9a-zA-Z]{1,10}[\@][0-9a-zA-Z]{2,4}[\.][0-9a-zA-Z]{3}$/;
                 var yhm=new RegExp(a);
                 result1=yhm.test(y);
                 if(!result1){
                  document.getElementById('ids5').innerHTML="<font color='red'>邮箱格式不正确</font>";
                 }else{
                  document.getElementById('ids5').innerHTML="";
                 }
            
        } 



        function dh(y){
           
                 a=/^[1][3|4|5|7|8][\d]{9}$/;
                 var yhm=new RegExp(a);
                 result1=yhm.test(y);
                 if(!result1){
                   document.getElementById('ids1').innerHTML="<font color='red'>电话格式不正确</font>";
                 }else{
                  document.getElementById('ids1').innerHTML="";
                 }
            
        } 

        function dh1(y){
          document.getElementById('ids1').innerHTML="<font color='red'>请输入正确电话</font>";
          
        }

         function users1(y){
          document.getElementById('ids2').innerHTML="<font color='red'>输入英文和数字</font>";
          
        }

                 function mm1(y){
          document.getElementById('ids3').innerHTML="<font color='red'>输入6位</font>";
          
        }

               function mm2(y){
          document.getElementById('ids4').innerHTML="<font color='red'>输入和密码一样</font>";
          
        }


          function yxx1(y){
          document.getElementById('ids5').innerHTML="<font color='red'>输入正确格式</font>";
          
        }
    </script>
  <form method='post' action='login.php' name='myform' >
      <table cellpadding="0" cellspacing="0"  width="542px"  height="454px">
          <tr>
          <td colspan="3" align="center"><i>用户注册</i></td>
            </tr>
            <tr >
              <td align="center" width="100" height="40" >用户名:</td>
                <td width="300"><input type="text" name="user" onblur='users(myform.user.value)' onfocus='users1()'><span id='ids2'></span></td>
                <td ><a href='#' onclick='winopen(myform.user.value)' style='text-decoration:none'>[检测用户名]</a></td>
            </tr>
            <tr>
              <td align="center" width="100" height="40">密码:</td>
                <td ><input type="password" name="pass" onblur='mm(myform.pass.value)' onfocus='mm1()'/><span id='ids3'></span></td>
            </tr>
            <tr>
              <td align="center"  height="40">确认密码:</td>
                <td ><input type="password" name="pass1" onblur='mm3(myform.pass1.value)'  onfocus='mm2()'/><span id='ids4'></span></td>
            </tr>
            <tr>
              <td align="center"  height="40">E-mail:</td>
                <td ><input type="text" name="yx" onblur='yxx(myform.yx.value)'  onfocus='yxx1()'/><span id='ids5'></span></td>
            </tr>
             <tr>
              <td align="center" height='40' width='100'>电话:</td>
                <td><input type="text" name="tel" onblur='dh(myform.tel.value)' onfocus='dh1(myform.tel.value)'/><span id='ids1'></span></td>
            </tr>
            <tr>
              <td align="center" height="40">联系地址:</td>
                <td ><input type="text" name="dz"/></td>
            </tr>
            <tr>
              <td align="center" height="40">验证码:</td>
                    <td height="40"> 
                     <script type="text/javascript">
                      function b(){
                        if(myform.yanz.value!=myform.hyanz.value){
                          document.getElementById('ids').innerHTML="<font color='red'>验证码错误</font>";
                        }else{
                          document.getElementById('ids').innerHTML="";
                        }
                      }

                      function c(){
                        document.getElementById('ids').innerHTML="<font color='red'>请输入正确验证码</font>";
                      }
                    </script>
                        <input type="text" class="yz" name='yanz' onblur='b()' onfocus='c()' >
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
                      </td>
                       <td><a href="javascript:recode()" class="a2"  style='text-decoration:none'>看不清　换一张</a>
                </td>
            </tr>
            <tr>
                <td></td>
                 <td  height="40"><span id='ids'></span></td>
            </tr>      
            <tr>
              <td  align='right'><input type="submit" name='sub1' value="注册" class="zc"/></td>
                <td  align='center'><input type="reset" name='sub2' value="重写" class="cx"/></td>
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
