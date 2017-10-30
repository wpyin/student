<?php
header("content-type:text/html;charset=utf-8");
$conn=mysqli_connect("localhost","root","","study");
mysqli_set_charset($conn,"utf8");
if($conn){
	switch($_GET["admin1"]){
		case 'add':
			/*$id = $_POST['id'];*/
			$name = $_POST['name'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
		    $class = $_POST['class']
			$sql = "INSERT into stu(name,age,sex,class) values('$name','$age','$sex','$class')";/*$sql= "INSERT into stu (name,age,sex,class) values('$name','$age','$sex','$class')";*/
			$rw = mysqli_query($conn,$sql);
			
		    if($rw>0){
		    	echo "<script>ALERT('添加成功！');</script>";
		    }
		    else{
		    	echo "<script>ALERT('添加失败！');</script>";
		    }
		    header("refresh:1;url='http://localhost:82/student'");
			/*header('Location:index.php');*/
			print('loading，please wait a monment...');
		    break;	
		}
	}