<?php
	session_start();
?>
<?php
	/*
	$_SESSION['arr']=array();
	$_SESSION['arr'][]=array('laoshan','19');
	$_SESSION['arr'][]=array('laoxie',20);*/


	//array_pop($_SESSION);

	//$_SESSION['arr']=array();

	if(isset($_POST['sub'])){
		//$_SESSION['arr']=array();
		$_SESSION['arr'][]=array($_POST['username'],$_POST['age']);

	}

	if(isset($_POST['del'])){
		array_pop($_SESSION['arr']);
	}

	if(isset($_POST['delall'])){
		//session_destroy();
		unset($_SESSION['arr']);
	}
?>

<h3>录入员工信息</h3>
<form action="07-test.php" method="post">
	名称:<input type="text" name="username"><br />
	年龄:<input type="text" name="age"><br />
	<input type="submit" name="sub" value="提交">
</form>

<form action="07-test.php" method="post">
	<table width=500 border=1>
	<tr>
		<th>编号</th>
		<th>姓名</th>
		<th>年龄</th>
	</tr>
	<?php
		if(isset($_SESSION['arr'])){
		foreach($_SESSION['arr'] as $k=>$v){
	?>
	<tr>
		<td><?php echo $k+1;?></td>
		<td><?php echo $v[0];?></td>
		<td><?php echo $v[1]?></td>
	</tr>
	<?php
		}}
	?>
	<tr>
		<td><input type="submit" name="del" value="删除"></td>
		<td><input type="submit" name="delall" value="清空数据"></td>
	</tr>
	</table>
</form>








