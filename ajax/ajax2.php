<?php
$name=trim($_POST['name1']);
$number=trim($_POST['number']);
$theme=trim($_POST['theme']);
$maintext=trim($_POST['maintext']);
$dt=date('Y:m:d H:i:s');

if(fopen("../clients.txt", 'a+')){
	$fd = fopen("../clients.txt", 'a+') or die("не удалось создать файл");
	$str = "\n$name $number - $dt\n$theme\n$maintext\n";
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