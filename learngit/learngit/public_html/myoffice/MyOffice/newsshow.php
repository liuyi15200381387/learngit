
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Untitled Page</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<STYLE type=text/css> 
{
  FONT-SIZE: 12px
}
.gridView {
  BORDER-RIGHT: #bad6ec 1px; BORDER-TOP: #bad6ec 1px; BORDER-LEFT: #bad6ec 1px; COLOR: #566984; BORDER-BOTTOM: #bad6ec 1px; FONT-FAMILY: Courier New
}
.gridViewHeader {
  BORDER-RIGHT: #bad6ec 1px solid; BORDER-TOP: #bad6ec 1px solid; BACKGROUND-IMAGE: url(../images/bg_th.gif); BORDER-LEFT: #bad6ec 1px solid; LINE-HEIGHT: 27px; BORDER-BOTTOM: #bad6ec 1px solid
}
.gridViewItem {
  BORDER-RIGHT: #bad6ec 1px solid; BORDER-TOP: #bad6ec 1px solid; BORDER-LEFT: #bad6ec 1px solid; LINE-HEIGHT: 32px; BORDER-BOTTOM: #bad6ec 1px solid; TEXT-ALIGN: center
}
.cmdField {
  BORDER-RIGHT: 0px; BORDER-TOP: 0px; BACKGROUND-IMAGE: url(../images/bg_rectbtn.png); OVERFLOW: hidden; BORDER-LEFT: 0px; WIDTH: 67px; COLOR: #364c6d; LINE-HEIGHT: 27px; BORDER-BOTTOM: 0px; BACKGROUND-REPEAT: repeat-x; HEIGHT: 27px; BACKGROUND-COLOR: transparent; TEXT-DECORATION: none
}
.buttonBlue {
  BORDER-RIGHT: 0px; BORDER-TOP: 0px; BACKGROUND-IMAGE: url(../images/bg_button_blue.gif); BORDER-LEFT: 0px; WIDTH: 78px; COLOR: white; BORDER-BOTTOM: 0px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 21px
}
</STYLE>
<META content="MSHTML 6.00.2900.5848" name=GENERATOR>
</HEAD>
<BODY 
style="BACKGROUND-POSITION-Y: -120px; BACKGROUND-IMAGE: url(../images/bg.gif); BACKGROUND-REPEAT: repeat-x">
<SCRIPT type=text/javascript>
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</SCRIPT>
<SCRIPT src="EmployeeMgr.files/WebResource.axd" type=text/javascript></SCRIPT>
<SCRIPT src="EmployeeMgr.files/ScriptResource.axd" 
type=text/javascript></SCRIPT>
<SCRIPT 
src="EmployeeMgr.files\ScriptResource(1).axd" 
type=text/javascript></SCRIPT>
<DIV>
  <TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
      <TR 
  style="BACKGROUND-IMAGE: url(../images/bg_header.gif); BACKGROUND-REPEAT: repeat-x" 
  height=47>
        <TD width=10><SPAN 
      style="FLOAT: left; BACKGROUND-IMAGE: url(../images/main_hl.gif); WIDTH: 15px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 47px"></SPAN></TD>
        <TD><SPAN 
      style="FLOAT: left; BACKGROUND-IMAGE: url(../images/main_hl2.gif); WIDTH: 15px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 47px"></SPAN><SPAN 
      style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; BACKGROUND-IMAGE: url(../images/main_hb.gif); PADDING-BOTTOM: 10px; COLOR: white; PADDING-TOP: 10px; BACKGROUND-REPEAT: repeat-x; HEIGHT: 47px; TEXT-ALIGN: center; 0px: ">管理员用户查看 </SPAN><SPAN 
      style="FLOAT: left; BACKGROUND-IMAGE: url(../images/main_hr.gif); WIDTH: 60px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 47px"></SPAN></TD>
        <TD 
    style="BACKGROUND-POSITION: 50% bottom; BACKGROUND-IMAGE: url(../images/main_rc.gif)" 
    width=10></TD>
      </TR>
      <TR>
        <TD style="BACKGROUND-IMAGE: url(../images/main_ls.gif)">&nbsp;</TD>
        <TD 
    style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; COLOR: #566984; PADDING-TOP: 10px; BACKGROUND-COLOR: white" 
    vAlign=top align=middle>
          <DIV>
<form >
            <TABLE class=gridView id=ctl00_ContentPlaceHolder2_GridView1 
      style="WIDTH: 100%; BORDER-COLLAPSE: collapse" cellSpacing=0 rules=all 
      border=1>
              <TBODY>
                <TR>
             
                  <TH class=gridViewHeader scope=col>新闻内容</TH>
                  <TH class=gridViewHeader scope=col>发布时间</TH>
   
                </TR>
                  <?php
      header('content-type:text/html;charset=utf-8');
      $link=@mysql_connect('localhost','root','');
      mysql_select_db('e00615080226',$link);
      mysql_query('set names utf8');
      $pagesize=6;
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
                <TR>
                
                  <TD class=gridViewItem><?php echo $info['nr'];?></TD>
                  <TD class=gridViewItem><?php echo $info['timess'];?></TD>
              
              </tr>
             <?php
        }while($info=mysql_fetch_array($sql));
      }
      ?>
              </TBODY>
            </TABLE>
            </form>
             <div class="Jump">

          全部共有<font color='red'><?php echo $rows;?></font>条记录&nbsp;当前为第<font color='red'><?php echo $page;?></font>页/共<font color='red'><?php echo $pages;?></font>页
        <a href=newsshow.php?page=1>首页</a>
        <a href=newsshow.php?page=<?php if($page!=1){echo $page-1;}else{echo $page;}?>>上一页</a>
        <?php
          for($i=1;$i<=$pages;$i++){
        ?>
              <a href=newsshow.php?page=<?php echo $i ;?>><?php echo $i;?></a>
        <?php
          }
        ?>
        <a href=newsshow.php?page=<?php if($page!=$pages){echo $page+1;}else{echo $pages;}?>>下一页</a>
        <a href=newsshow.php?page=<?php echo $pages;?>>尾页</a>
        <span>跳转到</span><select name='select' onchange="window.location.href=this.value">
          <option value='1' checked>请选择</option>
         <?php
          for($i=1;$i<=$pages;$i++){
          ?>
          <option value=newsshow.php?page=<?php echo $i;?>>第<?php echo $i;?>页</option>
          <?php
        }
          ?>
        </select>
       </div>
          </DIV>
        </TD>
        <TD style="BACKGROUND-IMAGE: url(../images/main_rs.gif)"></TD>
      </TR>
      <TR 
  style="BACKGROUND-IMAGE: url(../images/main_fs.gif); BACKGROUND-REPEAT: repeat-x" 
  height=10>
        <TD style="BACKGROUND-IMAGE: url(../images/main_lf.gif)"></TD>
        <TD style="BACKGROUND-IMAGE: url(../images/main_fs.gif)"></TD>
        <TD 
style="BACKGROUND-IMAGE: url(../images/main_rf.gif)"></TD>
      </TR>
    </TBODY>
  </TABLE>
</DIV>
<SCRIPT type=text/javascript>
//<![CDATA[
Sys.Application.initialize();
//]]>
</SCRIPT>

</BODY>
</HTML>
           
    