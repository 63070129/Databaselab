<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $Result['ID']
echo $id;
$sql = "SELECT * FROME guestbook WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<html>
<head>
	<title>Editor</title>
</head>
<body>
    <form action ="update.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value=<?php echo " $Result['Name'];"?>><br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment"value="<?php echo  $Result['comment'];?></textarea><br>  
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>

