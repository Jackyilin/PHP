<?php
	$con=0;
	while($con<5){
		$arr[]=rand(0,9);
		$newarr=array_unique($arr);
		$con=count($newarr);
	}

	foreach($newarr as $v){
		$str.=$v."&nbsp;";
	}

	echo $str;

	/*
	$arr=array();
	$str="";
	for($i=0;$i<5;$i++){
		$arr[$i]=rand(0,9);
		$newarr=array_unique($arr);
		if(count($newarr)<count($arr)){
			//array_pop($arr);
			unset($arr[$i]);
			$i--;
		}

	}

	for($j=0;$j<count($newarr);$j++){
		$str.=$newarr[$j]."&nbsp;";
	}

	echo $str;*/


?>