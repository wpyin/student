<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>学生管理系统</title>
	<script>
		function doDel(id){
			if (confirm('确认删除？')) {

				window.location='action.php?action=del&id='+id;
			}
		}
	</script>
</head>
<body>
<?php include("menu.php");?>
<h3>学生信息显示</h3>
<table width="350px" border="1" cellspacing="0">
		<tr>
			<td>id</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>班级</td>
		</tr>
		<?php
		/*连接数据库*/
		header("content-type:text/html;charset=utf8");
		$conn=mysqli_connect("localhost","root","","study");
		mysqli_set_charset($conn,"utf8");
		/*执行sql语句*/
		//echo "cuowu";die;
		$sql_select="SELECT * from stu";
		/*读取*/
		foreach ($conn -> query($sql_select) as $row){
			echo "<tr>";
			echo "<th>{$row['id']}</th>";
			echo "<th>{$row['name']}</th>";
			echo "<th>{$row['age']}</th>";
			echo "<th>{$row['sex']}</th>";
			echo "<th>{$row['class']}</th>";
			echo "<td>
					<a href='edit.php?id={$row['id']}'>修改</a>
					<a href='javascript:void(0);' onclick='doDel({$row['id']})'>删除</a>
					</td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>