<?php 
header("Content-type: text/html; charset=utf-8");


foreach ($_POST as $key => $value) {
	echo "Key: $key; Value: $value\n";
}

 // $file  = '';

 // $ss = "hello";
 // $content = $ss;
 //  if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
 //  echo "写入成功。<br />";
 // }
 // $content = "第二次写入的内容";
 // if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5)
 //     echo "写入成功。<br />";
 // }
 // if($data = file_get_contents($file)){; // 这个函数支持版本(PHP 4 >= 4.3.0, PHP 5) 
 //  echo "写入文件的内容是：$data";
 // }

?>
