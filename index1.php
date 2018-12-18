<?php
include 'config.php';
include 'classes/Page.php';
include 'classes/Database.php';

$page = new Page();
if(isset($_GET['id'])) {
	$id = (int)$_GET['id'];
	if($id != 0) {
		$text = $page->get_one($id);
		echo $page->get_body($text,'view');
		exit();
	}
	else {
		exit('wrong parameter');
	}
}
else {
	$text = $page->get_all();     
//        print_r($text);
	echo $page->get_body($text,'main');
	
}


?>