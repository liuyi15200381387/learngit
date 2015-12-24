<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>无标题页</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK 
href="images/public.css" type=text/css rel=stylesheet>
<LINK 
href="images/login.css" type=text/css rel=stylesheet>
<STYLE type=text/css>
</STYLE>
<META content="MSHTML 6.00.2900.5848" name=GENERATOR>
</HEAD>
<BODY>
<DIV id=div1>
  <TABLE id=login height="100%" cellSpacing=0 cellPadding=0 width=800 
align=center class="table1">
    <TBODY>
      <TR id=main>
        <TD class="h496">
          <form method='post' action='logins.php'>
          <TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" class="loginbox">
            <TBODY>
              <TR height=40>
                <TD rowSpan=4>&nbsp;</TD>
                <TD>用户名：</TD>
                <TD>
                
                  <INPUT class=textbox id=txtUserName name='user' type='text' value=<?php 

echo @$_COOKIE['user'];?> >
                </TD>
                <TD width=120>&nbsp;</TD>
              </TR>
              <TR>
                <TD>密　码：</TD>
                <TD>
            <INPUT class=textbox id=txtUserPassword type='password'  name='pass' 

value=<?php echo @$_COOKIE['pass'];?> >
                </TD>
                <TD width="120">&nbsp;</TD>
              </TR>
              <TR >
                <TD>验证码：</TD>
                <TD vAlign=center colSpan=2>
                  <INPUT id=txtSN size=4 name=yz  >&nbsp;
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

                     <a href="javascript:recode()" class="a2">看不清　换一张</a>
                  </TD>
              </TR>
              <TR height="40">
                <TD></TD>
                <TD align=right>
                 <INPUT type='submit' value="登录" name='sub'>
                  <?php
                    if(@$_COOKIE['rem']==1){
                  ?>
                  <input type='checkbox' name='rem' value='1' checked='checked'>
                  <?php
                    }else{
                  ?>
                  <input type='checkbox' name='rem' value='1'>
                  <?php
                    }
                  ?>记住密码
                </TD>
                <TD width=120>&nbsp;</TD>
              </TR>
            </TBODY>
          </TABLE>
        </form>
        </TD>
      </TR>
      <TR id=root height=104>
        <TD height="104">&nbsp;</TD>
      </TR>
    </TBODY>
  </TABLE>
</DIV>
<DIV id=div2 style="DISPLAY: none"></DIV>
</CONTENTTEMPLATE>
</BODY>
</HTML>
