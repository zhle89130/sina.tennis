﻿<?php
	ob_clean();
	$checkcode="";
	for($i=0;$i<4;$i++){
		$checkcode.=chr(rand(1,122));
	}
	$_SESSION['checkcode']=$checkcode;
	$img=imagecreatetruecolor(102,36);
	$color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	imagestring($img,5,3,3,$chcekcode,$color);
	imagepng($img);
	header("content-type:image/png");
	//header("content-type:image/png");
	
	imagedestroy($img);

?>