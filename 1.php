<?php
session_start();
header("content-type:image/jpeg");       //定义输出为图像类型
$im=imagecreatefromjpeg("66.jpg");//载入照片
$textcolor=imagecolorallocate($im,255,0,0);//设置字体颜色为蓝色，值为RGB颜色值
$fnt="STLITI.ttf"; 
$str="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";    //定义字体
$yzm="";
for($i=1;$i<=4;$i++){
	$p=rand(0,35);
	$yzm.=substr($str,$p,1);
	}		    //定义输出字体串
$_SESSION['yzm']=$yzm;
imageTTFText($im,32,0,30,40,$textcolor,$fnt,$yzm);      //写TTF文字到图中
imagejpeg($im);       //建立JPEG图形
imagedestroy($im);    //结束图形，释放内存空间

?>