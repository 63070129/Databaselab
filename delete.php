<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: ' .mysqli_conncet_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id = $id";
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error : " . $sql . mysqli_error($conn);
}
mysqli_close($conn);
?>
