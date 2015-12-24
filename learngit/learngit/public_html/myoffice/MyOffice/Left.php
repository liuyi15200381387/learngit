<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>无标题页</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<STYLE type=text/css> 
{
  FONT-SIZE: 12px
}
#menuTree A {
  COLOR: #566984; TEXT-DECORATION: none
}
</STYLE>
<SCRIPT src="Left.files/TreeNode.js" type=text/javascript></SCRIPT>
<SCRIPT src="Left.files/Tree.js" type=text/javascript></SCRIPT>
<META content="MSHTML 6.00.2900.5848" name=GENERATOR>
</HEAD>
<BODY 
style="BACKGROUND-POSITION-Y: -120px; BACKGROUND-IMAGE: url(../images/bg.gif); BACKGROUND-REPEAT: repeat-x">
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%">
  <TBODY>
    <TR>
      <TD width=10 height=29><IMG src="Left.files/bg_left_tl.gif"></TD>
      <TD 
    style="FONT-SIZE: 18px; BACKGROUND-IMAGE: url(../images/bg_left_tc.gif); COLOR: white; FONT-FAMILY: system">Main 
        Menu</TD>
      <TD width=10><IMG src="Left.files/bg_left_tr.gif"></TD>
    </TR>
    <TR>
      <TD style="BACKGROUND-IMAGE: url(../images/bg_left_ls.gif)"></TD>
      <TD id=menuTree 
    style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; HEIGHT: 100%; BACKGROUND-COLOR: white" 
    vAlign=top></TD>
      <TD style="BACKGROUND-IMAGE: url(../images/bg_left_rs.gif)"></TD>
    </TR>
    <TR>
      <TD width=10><IMG src="Left.files/bg_left_bl.gif"></TD>
      <TD style="BACKGROUND-IMAGE: url(../images/bg_left_bc.gif)"></TD>
      <TD width=10><IMG 
src="Left.files/bg_left_br.gif"></TD>
    </TR>
  </TBODY>
</TABLE>
<SCRIPT type=text/javascript>
var tree = null;
var root = new TreeNode('系统菜单');
var fun1 = new TreeNode('管理员用户管理');
var fun2 = new TreeNode('管理员用户删改', 'userguanli.php', 'tree_node.gif', null, 'tree_node.gif', null);fun1.add(fun2);
var fun3 = new TreeNode('管理员用户查看', 'show.php', 'tree_node.gif', null, 'tree_node.gif', null);fun1.add(fun3);
var fun4 = new TreeNode('管理员用户添加', 'insert.php', 'tree_node.gif', null, 'tree_node.gif', null);fun1.add(fun4);root.add(fun1);
var fun5 = new TreeNode('新闻列表管理');
var fun6 = new TreeNode('新闻查看', 'newsshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun5.add(fun6);
var fun7 = new TreeNode('新闻更新删除', 'newsgengxinshanchu.php', 'tree_node.gif', null, 'tree_node.gif', null);fun5.add(fun7);
var fun8 = new TreeNode('新闻添加', 'newstianjia.php', 'tree_node.gif', null, 'tree_node.gif', null);fun5.add(fun8);root.add(fun5);
var fun9 = new TreeNode('留言管理');
var fun10 = new TreeNode('留言查看', 'liuyanshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun9.add(fun10);
var fun11 = new TreeNode('留言删除', 'liuyanshanchu.php', 'tree_node.gif', null, 'tree_node.gif', null);fun9.add(fun11);root.add(fun9);

var fun13 = new TreeNode('会员管理');
var fun14 = new TreeNode('会员查看', 'huiyuanshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun13.add(fun14);
var fun15 = new TreeNode('会员删除', 'huiyuanshanchu.php', 'tree_node.gif', null, 'tree_node.gif', null);fun13.add(fun15);root.add(fun13);
var fun16 = new TreeNode('产品列表管理');
var fun17 = new TreeNode('产品更新删除', 'chanpingengxinshanchu.php', 'tree_node.gif', null, 'tree_node.gif', null);fun16.add(fun17);
var fun18 = new TreeNode('产品查看', 'chanpinshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun16.add(fun18);
var fun19 = new TreeNode('产品添加', 'chanpintianjia.php', 'tree_node.gif', null, 'tree_node.gif', null);fun16.add(fun19);root.add(fun16);

var fun21 = new TreeNode('新闻详情管理');
var fun22 = new TreeNode('新闻详情查看', 'newsallshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun21.add(fun22);
var fun23 = new TreeNode('新闻详情删改', 'newsallshanchu.php', 'tree_node.gif', null, 'tree_node.gif', null);fun21.add(fun23);
var fun24 = new TreeNode('新闻详情添加', 'newsalltianjia.php', 'tree_node.gif', null, 'tree_node.gif', null);fun21.add(fun24);root.add(fun21);

var fun25 = new TreeNode('产品详情管理');
var fun26 = new TreeNode('产品详情查看', 'pshow.php', 'tree_node.gif', null, 'tree_node.gif', null);fun25.add(fun26);
var fun27 = new TreeNode('产品详情删改', 'pdelete.php', 'tree_node.gif', null, 'tree_node.gif', null);fun25.add(fun27);
var fun28 = new TreeNode('产品详情添加', 'pinsert.php', 'tree_node.gif', null, 'tree_node.gif', null);fun25.add(fun28);root.add(fun25);tree = new Tree(root);tree.show('menuTree')
</SCRIPT>
</BODY>
</HTML>
