<?php
	$arr = array(
	"title" => "PHP教程",
	"subject1" => "第一章：PHP 语法",
	"content1" => "PHP 脚本可以放在文档中的任何位置<br />PHP 脚本以 <?php 开始，以 ?> 结束<br />PHP 文件的默认文件扩展名是.php<br />PHP 文件通常包含 HTML 标签和一些 PHP 脚本代码<br />PHP 中的每个代码行都必须以分号结束<br />PHP有两种在浏览器输出文本的基础指令：echo 和 print",
	"subject2" => "第二章：PHP 变量",
	"content2" => "变量以 $ 符号开始，后面跟着变量的名称<br />变量名必须以字母或者下划线字符开始<br />变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）<br />变量名不能包含空格<br />变量名是区分大小写的（y 和 Y 是两个不同的变量）<br />PHP 语句和 PHP 变量都是区分大小写的",
	"subject3" => "第N章：...",
	"content3" => "未完待续",
	);
	echo json_encode($arr);
?>
