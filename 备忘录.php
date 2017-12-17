<?php
	//构建数组 键名（时间） 键值（做事）

	$data['2018-09-01']="看电影";
	$data['2018-10-10']="双十节";
	$data['2018-11-02']="离婚纪念日";
	$flag=false;
	$ss=true;
	if(isset($_POST['sub'])){
		$date=$_POST['date'];
		//循环$data关联数组  foreach
		list($a,$b,$c)=explode('-',$date);
		if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
			if(strlen($a)>0 && strlen($a)<=4){
				for($i=1;$i<=12;$i++){
					if($i==$b){
						$ss=false;
					}
				}

				if($ss==false){
					//判别日期是不是合法
					//date('t',$a,$b,$c)
				}else{
					echo "月份不对";
				}
			}
		}

		foreach($data as $k=>$v){
			if($k==$date){
				$flag=true;
				echo "<script>alert('".$k."备忘日:$v"."')</script>";
				break;
			}
		}

		if($flag==false){
			echo "<script>alert('没有备忘')</script>";
		}

	}


?>

<meta charset="utf-8">
<h3>查询备忘录</h3>
<form action="01-test.php" method="post">
	输入查询日期:<input type="text" name="date"><br />
	<input type="submit" name="sub" value="查询">
</form>