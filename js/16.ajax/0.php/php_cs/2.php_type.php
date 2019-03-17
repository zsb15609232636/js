<?php
//字符串
$text1='hello';//单引号字符串
$text2="world";//双引号字符串
$text3= $text1.' '.$text2;//拼接字符串
echo $text3.'<br>';
//字符串中字符
echo $text3[4];
echo '<br>';
echo strlen($text3);//字符串长度
echo "<br>";
echo strpos($text3,'he');//查找 "php" 在字符串中第一次出现的位置：
echo "<br>";
$int =3;
$float = 3.3;
$bool=true;
echo "-----------------";
echo "<br>";
//php数组

    //1.数值数组
        $numbers=array(1,2,3,4,5);
        echo $numbers[2];
        echo "<br>";
    //2.关联数组
    $person=array('name'=>'xiaomao','age'=>20);
        echo "<br>";
    echo $person['name'];
        echo "<br>";
    $person['name']='xiaolv';
        echo "<br>";
    echo $person['name'];
        echo "<br>";
?>
