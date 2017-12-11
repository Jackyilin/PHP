

<meta charset="utf-8">
<h3>输入行列生成表格</h3>
<form action="shengchengbiaoge.php" method="post">
	输入行:<input type="text" name="rows"><br />
	输入列:<input type="text" name="cols"><br />
	<input type="submit" name="sub" value="生成表格">
	<input type="reset" name="rst" value="重置表格">
</form>

<?php

	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		$color="";
		echo "<table width=500 border=1>";
		echo "<caption><h3>用户动态输入表格 行".$rows."列".$cols."</h3></caption>";
		for($i=0;$i<$rows;$i++){
			if($i % 2==0){
				$color="red";
			}else{
				$color="green";
			}

			echo "<tr bgColor='".$color."'>";
			for($j=0;$j<=$cols;$j++){
				echo "<td>";
				echo $j;
				echo "</td>";
			}
			echo "</tr>";
		}


		echo "</table>";
	}

?>