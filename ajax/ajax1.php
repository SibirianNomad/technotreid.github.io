<?php
$name=trim($_POST['popup_name']);
$number=trim($_POST['popup_number']);
$dt=date('Y:m:d H:i:s');

if(fopen("../clients.txt", 'a+')){
	$fd = fopen("../clients.txt", 'a+') or die("не удалось создать файл");
	$str = "\n$name $number - $dt";
	if(fwrite($fd, $str)){
		if(fclose($fd)){
			echo 1;
		}else{
	echo 0;
}
	}else{
	echo 0;
}
}else{
	echo 0;
}

?>