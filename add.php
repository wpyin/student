<!DOCTYPE html><!-- php文件能解析html文件 -->
<html lang="en">
<head>
    <meta charset="utf8">
	<title>学生管理系统</title>
</head>
<body>
	<?php include('menu.php');?>
	<h3>增加学生信息</h3>
	<form action="action.php?action=add" method="post"><!-- 这里是个判断 -->
	<table>
		<tr>
			    <td>学号</td>
				<td><input type="text" name="id"></td>
		</tr>
		<tr>
		    <td>姓名</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
		    <td>年龄</td>
			<td><input type="text" name="age"></td>
		</tr>
		<tr>
		    <td>性别</td>
			<td><input type="radio" name="sex" value="男">男</td>
			<td><input type="radio" name="sex" value="女">女</td>
		</tr>
		<tr>
		    <td>班级</td>
			<td><input type="text" name="class"></td>
		</tr>
	    <tr>
			<td><a href="index.php">返回</a></td>
			<td><input type="submit" value="添加"></td>
			<td><input type="submit" value="重置"></td>
		</tr>
	</table>
	</form>
</body>
</html> 