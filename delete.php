<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);

$id = $_GET['ID'];
$delete = "DELETE FROM Guestbook WHERE id=$id";
if (mysqli_query($conn, $delete)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
