<html>
<head>
<title>Editor</title>
</head>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM guestbook WHERE id='$id' ";
?>
    <form action = "update.php" method = "get" id="CommentForm" >
    <input type="text" name="name" value="<?php echo $Result['name'];?>">
    <textarea rows="10" cols="20" name ="comment" value="<?php echo $Result['name'];?>">
    <input type="submit" id="commentBtn">
<?php
mysqli_close($conn);

?>
