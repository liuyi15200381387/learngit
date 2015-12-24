<?php
	 header('content-type:text/html;charset=utf-8');
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

?>