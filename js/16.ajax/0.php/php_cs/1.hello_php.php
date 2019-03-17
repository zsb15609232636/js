<?php
$num =3;

$x=3;
$y=4;
function func(){
    $x=10;
    echo '局部变量x为' .$x;
//    .$GLOBALS['']全局变量
   echo '全局变量x为:' .$GLOBALS['x'];

   echo 'y变量为' .$y;
}
func();
?>
