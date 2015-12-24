<?php
    session_start();
    header("content-type:textml;charset=utf-8");
    class addwaterpress{
            function getName($filename){
                  return strtolower(strstr($filename,"."));
            }
            function getimage($gname,$imageurl){
                  switch ($gname) {
                        case '.gif':
                              $img=imagecreatefromgif($imageurl);
                              break;
                        case '.jpg':
                              $img=imagecreatefromjpeg($imageurl);
                              break;
                        case '.png':
                              $img=imagecreatefrompng($imageurl);
                              break;
                  }
                  return $img;
            }
            function outputimage($img,$gname,$imageurl){
                        switch ($gname) {
                        case '.gif':
                              imagegif($img,$imageurl);
                              break;
                        case '.jpg':
                              imagejpeg($img,$imageurl);
                              break;
                        case '.png':
                              imagepng($img,$imageurl);
                              break;
                        }
            }
            function add($imageurl,$water){
                  $img=$this->getimage($this->getName($imageurl),$imageurl);
                  $textcolor=imagecolorallocate($img, 200, 200, 200);
                  imagestring($img, 5, 0, 0, $water, $textcolor);
                  $this->outputimage($img,$this->getName($imageurl),$imageurl);
                  imagedestroy($img);
            }
       }

    $filename="../../images/".@$_FILES['file']['name'];
    if(move_uploaded_file(@$_FILES['file']['tmp_name'],$filename))
    {
        
        $add=new addwaterpress();
        $add->add($filename,'dodi');
    }
    $link=@mysql_connect('localhost','root','');
    mysql_select_db('e00615080226',$link);
    mysql_query('set names utf8');
    $a=$_SESSION['ids'];
    $filename="images/".@$_FILES['file']['name'];
    $nr1=@$_POST['nr1'];
    $nr2=$_POST['nr2'];
    if($_FILES['file']['name']=="")
    {
        $sqls=mysql_query("select * from tb_productdetails where id=\"$a\"");
        $info=mysql_fetch_array($sqls);
        $filename=$info['pic'];
    }
    $sql=mysql_query("update tb_productdetails set pic=\"$filename\",nr1=\"$nr1\",nr2=\"$nr2\" where id='$a'");
    if($sql)
    {
      echo "<script>
                  alert('更新成功');
                  window.location.href='pdelete.php';
             </script>";
    }

       

?>