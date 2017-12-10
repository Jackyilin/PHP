<?php
	if(isset($_POST['sub'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$ysf=$_POST['ysf'];

		$bz1=false;
		$bz2=false;
		$message="";
		if(is_numeric($num1) && is_numeric($num2)){
			$bz1=true;
		}else{
			$message="输入一定要是数字";
		}

		if(!empty($num1) && !empty($num2)){
			$bz2=true;
		}else{
			$message="输入不能为空";
		}


		$sum="";
		if($bz1==true && $bz2==true){
			switch($ysf){
			case '+':
				$sum=$num1+$num2;
				break;
			case '-':
				$sum=$num1-$num2;
				break;
			case '*':
				$sum=$num1*$num2;
				break;
			case '/':
				$sum=$num1/$num2;
				break;
			case '%':
				$sum=$num1%$num2;
				break;
			}
		}

	}

?>

<meta charset="utf-8">
<form action="test1210_jisuanqi.php" method="post">
	<table width=800 align=center border=1>
	<caption><h3>计算器</h3></caption>
		<tr>
			<td>
				<input type="text" name="num1" value="<?php echo $num1;?>">
			</td>
			<td>
				<select name="ysf">
					<option value='+' <?php echo $_POST['ysf']=='+'?"selected":"";?>>+</option>
					<option value='-' <?php echo $_POST['ysf']=='-'?"selected":"";?>>-</option>
					<option value='*' <?php echo $_POST['ysf']=='*'?"selected":"";?>>×</option>
					<option value='/' <?php echo $_POST['ysf']=='/'?"selected":"";?>>/</option>
					<option value='%' <?php echo $_POST['ysf']=='%'?"selected":"";?>>%</option>
				</select>
			</td>
			<td>
				<input type="text" name="num2" value="<?php echo $num2;?>">
			</td>
			<td>
				<input type="submit" name="sub" value="计算">
			</td>
		</tr>
		<?php
			if(isset($_POST['sub'])){
				echo "<tr>";
				if($bz1==true && $bz2==true){
					echo "<td colspan='4'>"."结果为:".$num1." $ysf ".$num2." = ".$sum."</td>";
				}else{
					echo "<td>".$message."</td>";
				}

				echo "</tr>";
			}
		?>
	</table>
</form>














