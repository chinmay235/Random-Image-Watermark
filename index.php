<?php
	$rands = rand(1000,9999);
	
	session_start();
	$_SESSION['random_image_number_check'] = $rands;
	
	$bg = 'random.jpg';
	$numimgp = 'image.jpg';
	
	$numimg1 = sprintf($numimgp,substr($rands,0,1));
	$ys1 = rand(0,30);
	
	$bgImg = imageCreateFromJPEG($bg);
	$nmImg1 = imageCreateFromGIF($numimg1);
	imageCopyMerge($bgImg, $nmImg1, 0, $ys1, 0, 0, 1000, 30, 50);
	header("Content-type: image/jpg");
	ImageJPEG($bgImg,"",100);
	imagedestroy($bgImg);
	imagedestroy($nmImg1);
?>
