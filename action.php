<?php
/*实现add功能*/
header("content_type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","","study");
mysqli_set_charset($conn,"utf8");/*先连接数据库*/
if($conn){

	switch($_GET["action"]){

		case 'add':
		    
		    $id = $_POST['id'];//*接受我们从页面传来的信息
			$name = $_POST['name'];
			$age = $_POST['age'];

			$sex = $_POST['sex'];
			$class = $_POST['class'];/*接受我们从页面传来的信息*/
			$sql = "insert into stu(id,name,age,sex,class) values('$id',$name','$age','','$class')";//*对数据库进行插入
			
			//$sql = "insert into stu(id,name,age,sex,class) values('$id','$name','$age','$sex','$class')";//*对数据库进行插入
		    $sql = "insert into stu(id,name,age,sex,class) values('$id','$name','$age','$sex','$class')";//*对数据库进行插入亚旭原代码
			$rw = mysqli_query($conn,$sql);/*执行sql语句*/
			//if ($conn->query($sql) === TRUE) {
            //   echo "新记录插入成功";
            //   } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            //   }
			//echo $_POST['id'];die;
		    if($rw > 0){
		    	echo "<script>ALERT('添加成功！');</script>";
		    }
		    else{
		    	echo "<script>ALERT('添加失败！');</script>";
		    }
			header('Location:index.php');
			print('loading，please wait a monment...');
		    break;	
		case 'edit':
		    $id=$_POST['id'];
			$name=$_POST['name'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$class=$_POST['class'];/*接受我们从页面传来的信息*/
			$sqle = "UPDATE stu set  name='$name',age='$age',sex='$sex',class='$class' where id='$id';";//*对数据库进行插入
			$rw=mysqli_query($conn,$sqle);/*执行sql语句*/
			
		    if($rw > 0){
		    	echo "<script>alter('更新成功！');</script>";
		    }
		    else{
		    	echo "<script>alter('更新失败！');</script>";
		    }
			header('Location:index.php');
		    break;
		case 'del':
		    $id=$_GET['id'];
			$sql="DELETE from stu where id='$id'";//*对数据库进行插入
			$rw=mysqli_query($conn,$sql);/*执行sql语句*/
		    if($rw > 0){
		    	echo "<script>alter('删除成功！');</script>";
		    }
		    else{
		    	echo "<script>alter('删除失败！');</script>";
		    }
			header('Location:index.php');
		    break;			
	    }
        }
?>
