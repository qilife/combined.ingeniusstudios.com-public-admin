<?php
$img = $_GET['img'];
//$im = imagecreatefromjpeg($img);
//print_r($_SERVER);exit;
header('Content-Type: image/jpeg');
//readfile($img);die;
//imagejpeg($img);
//imagedestroy($img);
//print_r(getimagesize($img));die;
$imgsize = getimagesize($img);
//print_r($imgsize);die;
if($imgsize[0] > 140 ){
	$percent = 0.2;
	list($width, $height) = $imgsize;
	$new_width = 140;//$width * $percent;
	$new_height = 140;//$height * $percent;
	
	$image_p = imagecreatetruecolor($new_width, $new_height);
	$image = imagecreatefromjpeg($img);
	if(empty($image)) {
		$image = imagecreatefrompng($img);
	}
	if(empty($image)) {
		$image = imagecreatefromgif($img);
	}
//	print_r($image);die;
	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	
	// Output
	imagejpeg($image_p, null, 100);
}else {
	readfile($img);die;
}

?>