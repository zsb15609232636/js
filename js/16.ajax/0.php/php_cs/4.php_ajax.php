<?php
//得到用户名，根据一个key值得到一个vue值
header("Conten_type:text/html; charset=utf-8");//指定当前页编码
$con=mysqli_connect('localhost','root','','test');  //连接MySQL  初始的用户名密码  在D:\php\wamp64 下面搜索config.default.php 里面查看初始的用户名密码   用户名：root  密码：''
mysqli_query($con,'set names utf8');//设置页面数据格式

$username = $_POST['username'];
// echo $username;
$sql="select * from reg where name = '$username'";
$query = mysqli_query($con,$sql);
echo mysqli_num_rows($query);
echo "<br>";
if($query && mysqli_num_rows($query)){
    // echo '不能注册';
    echo "<script>alert('不能注册')</script>";

}else{
    // echo '可以注册';
    $sql2="insert into reg(name) values('$username')";
    $query = mysqli_query($con,$sql2);
    if($query){
        echo "('注册成功')";
    }else{
         echo "<script>alert('注册失败')</script>";
    }


}
?>
