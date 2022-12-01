<?php


list($width, $height, $type, $attr) = getimagesize("img/1.jpg");
echo  $width .'<br>fff';
echo $height.'<br>';
echo $type.'<br>';
echo $attr.'<br>';
///echo "<img src=\"img/1.jpg\" $attr alt=\"getimagesize() example\" />";
?>
