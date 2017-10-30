<?php
header("Content-type:text/html;charset=utf-8");  //头部,设置页面内容是html,编码格式是utf-8

$servername = "localhost";
$username ="root";
$password = "root";
$dbname = "teacher";
//创建连接
$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8_general_ci');//设定字符集
//检测连接
if(!$conn){
die("连接失败：".mysqli_connect_error());
}
//创建数据库(不能使用name，这是关键字)
$sql = "CREATE TABLE tec(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
age INT(6) NOT NULL,
sex VARCHAR(20),
class VARCHAR(50) NOT NULL
);";


if(mysqli_query($conn,$sql))
{
	echo "数据表tec创建成功";
}
else
{
	echo "数据表tec创建失败:" . mysqli_error($conn);
}
mysqli_close($conn);
?>