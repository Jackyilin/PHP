<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		$str=$sfile['name'];
		$newdata=explode('.',$str);
		//echo $newdata[1];
		$length=count($newdata)-1;
		//echo $newdata[$length];
		$flag=true;
		$arr=array('exe','txt','rar');
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]==$newdata[$length]){
				$flag=false;
			}
		}

		if($flag==false){
			echo "上传文件非法";
		}else{
			$upload="./upload/".time().".jpg";
			$bb=move_uploaded_file($sfile['tmp_name'],$upload);
			if($bb){
				echo "上传成功";
			}else{
				echo "error";
			}
		}

		/*  jianshuo.sword.jpg
		 * [name] => 11216943431d69da26o.jpg
   			 [type] => image/jpeg
    			[tmp_name] => C:\xampp\tmp\php2AF8.tmp
		 */
	}

?>

<meta charset="utf-8">
检测文件名后缀<br />
<form action="16-test.php" method="post" enctype="multipart/form-data">
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>