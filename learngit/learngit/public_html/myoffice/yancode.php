<?php
	session_start();
	header('content-type:image/png');
	$im=imagecreate(65, 25);
	imagefill($im, 0, 0, imagecolorallocate($im, 200, 200, 200));
	$yanz=$_GET['code'];
	$_SESSION['id']=$yanz;
	imagestring($im, rand(3,5), rand(10,30), rand(3,12), $yanz,imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
	for($i=0;$i<100;$i++)
	{
	imagesetpixel($im, rand(0,65), rand(0,25), imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
	}
	imagepng($im);
	imagedestroy($im);
?>