<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
</head>
<body>
<h1>Header</h1>
	<? if(isset($text)) : ?>
		<? foreach($text as $item) : ?>
			<h2>
				<a href="index.php?id=<?=$item['id'];?>"><?=$item['title'];?></a>
			</h2>
			<p>
				<?=$item['discription'];?>
			</p>
		<? endforeach; ?>
	<? endif; ?>
<h6>footer</h6>
</body>
</html>

