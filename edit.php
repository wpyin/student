<!DOCTYPE html><!-- php文件能解析html文件 -->
<html lang="en">
<head>
    <meta charset="utf8">
	<title>学生管理系统</title>
</head>
<body>
<?php
/*连接数据库*/
        header("content-type:text/html;charset=utf8");
		$conn=mysqli_connect("localhost","root","root","study");
		mysqli_set_charset($conn,"utf8");
		@$id=$_GET['id'];/*注意这里出现index错误*/
		/*执行sql语句*/
	    $sql_select="SELECT * from stu where id='$id'";
	    $stmt=mysqli_query($conn,$sql_select);
	    /*获得数据*/
	    $stu=mysqli_fetch_assoc($stmt);
?>
	<?php include('menu.php');?>
	<h3>修改学生信息</h3>
	<form action="action.php?action=edit"? method="post"><!-- 这里是个判断 -->
	<input type="hidden" name="id" value="<?php echo $stu['id'];?>">
	<table>
		   <tr>
			    <td>学号</td>
				<td><input type="text" name="id" value="<?php echo $stu['id'];?>"></td>
			</tr> 
		<tr>
		    <td>姓名</td>
			<td><input type="text" name="name" value="<?php echo $stu['name'];?>"></td>
		</tr>
		<tr>
		    <td>年龄</td>
			<td><input type="text" name="age" value="<?php echo $stu['age'];?>"></td>
		</tr>
		<tr>
		    <td>性别</td>
			<td><input type="radio" name="sex" value="男"<?php echo ($stu['sex']=="男")?"checked":""?>>男</td>
			<td><input type="radio" name="sex" value="女"<?php echo ($stu['sex']=="女")?"checked":""?>>女</td>
		</tr>
		<tr>
		    <td>班级</td>
			<td><input type="text" name="class" value="<?php echo $stu['class'];?>"></td>
		</tr>
	    <tr>
			<td><a href="index.php">返回</a></td>
			<td><input type="submit" value="修改"></td>
			<td><input type="submit" value="重置"></td>
		</tr>
	</table>
	</form>
</body>
</html> 