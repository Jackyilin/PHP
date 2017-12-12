<?php
	//声明一个多维数组
	$info=array(
		'user'=>array(
			array(1,'laoshan','male','18'),
			array(2,'laoxie','male',19),
			array(3,'xiaod','female',20),
		),
		'score'=>array(
			array(1,100,80,90),
			array(2,45,68,79),
			array(3,56,90,65),
		),
		'connect'=>array(
			array(1,110,'shan@cc.com'),
			array(2,100,'xie@bb.com'),
			array(3,102,'dong@cc.com'),
		)
	);

	foreach($info as $tablename=>$table){
		echo "<table width=800 border=1 align=center>";
		echo "<caption><h3>".$tablename."</h3></caption>";
		foreach($table as $v){
			echo "<tr>";
			foreach($v as $value){
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}


?>











