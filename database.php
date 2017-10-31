<?php
header("Content-type:text/html;charset=utf-8");  
//头部,设置编码
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "study";
//创建连接	
$conn = mysqli_connect($servername,$username,$password);


//检测连接
if(!$conn){
	die("连接失败：".mysqli_connect_error());
}

//创建数据库
$sql = "CREATE DATABASE study CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'; 
";

if(mysqli_query($conn,$sql)){
	echo "数据库创建成功";
}else{
	echo "数据库创建失败:" . mysqli_error($conn);
}
//mysqli_set_charset($conn,'utf8_general_ci');//设定字符集
$conne = mysqli_connect($servername,$username,$password,$dbname);
//$conne->query("SET NAMES utf8_general_ci");
//$mysqli_query($conne,"SET NAMES utf8_general_ci");面向mysql_connect()是面向过程的数据库连接方式，mysqli是面向对象的方式。  参考网站http://blog.csdn.net/kimbing/article/details/52894099
// 使用 sql 创建数据表
$sqlb = "CREATE TABLE stu (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
age int(30) NOT NULL,
sex VARCHAR(50),
class VARCHAR(50)
)";
mysqli_set_charset($conne,'utf8_general_ci');
if ($conne->query($sqlb) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conne->error;
}
mysqli_close($conne);
mysqli_close($conn);
?>