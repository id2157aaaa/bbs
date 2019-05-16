<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sample_0425</title>
</head>
<body>
<form method="POST" action="./php/txtToLabel.php">
	コメント入力欄：<input type="text" name="come">
	<input type="submit" name="sousin">
</form>

ここからコメント
<?php
	require"./php/print_man.php";
	$tmp = "abcd";

	print("aaaa\n".$tmp);
	print_man();
?>

</body>
</html>
