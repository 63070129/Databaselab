<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);

$name = $_POST['name'];
$comment = $_POST['comment'];
$id = $_GET['id'];
$del = "DELETE FROM guestbook where id='$id'";

if($del)
{
    mysqli_close($db);
    header("location:show.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
