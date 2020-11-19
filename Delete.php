<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);

$id = $_GET['ID'];
"DELETE FROM Guestbook Where id = $id;
?>
