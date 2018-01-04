<html>
<head>
<title>Chat</title>
</head>
<body>
<p>Chat2 sent messsage:</p>
<?php
$data=$_POST['data'];
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'demo');
$query="insert into data(inbox) values('$data')";
$check=mysqli_query($connect,$query);
mysqli_close($connect);
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'demo');
$query="select * from data";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo $row['inbox'].'<br>';
}
mysqli_close($connect);
?>
<a href="chat2.php">Back</a>
</body>
</html>