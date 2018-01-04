<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'demo');
$query="delete from data";
$query2="delete from data2";
$status=mysqli_query($connect,$query);
$status2=mysqli_query($connect,$query2);
mysqli_close($connect);
if($status==true&&$status2==true)
        echo "Cache cleared";
else 
	echo "Failed to clear cache";
?>
<html>
<head>
<title>Chat</title>
</head>
<body>
<a href="chat2.php">Back</a>
</body>
</html>