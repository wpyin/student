<?php/*实现add功能*/
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","teacher");
mysqli_set_charset($conn,"utf8");/*先连接数据库*/
if($conn){
	switch ($_GET['admin'])
	    {
		case 'add':
		    /*$id=$_POST['id'];*//*接受我们从页面传来的信息*/
			$name = $_POST['name'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			$class = $_POST['class'];/*接受我们从页面传来的信息*/
			$sql = "INSERT into stu(name,age,sex,class) values('$name','$age','$sex','$class')";//*对数据库进行插入
			$rw = mysqli_query($conn,$sql);/*执行sql语句*/

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