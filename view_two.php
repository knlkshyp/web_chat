<html>
<head>
<title>Chat</title>
</head>
<body>
<p>Chat2 received message:</p>
<?php 
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'demo');
$query="select * from data2";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo $row['inbox2'].'<br>';
}
mysqli_close($connect);
?>
<a href="chat2.php">Back</a>
</body>
</html>