<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);

$name = $_POST['Name'];
$comment = $_POST['Comment'];
$id = $_GET['ID'];
$link = $_POST['link'];
$del = "DELETE FROM Guestbook Where id = $id;

if($del)
{
    mysqli_close($con);
    header("location:show.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
