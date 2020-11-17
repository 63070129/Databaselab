<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];

$sql = "DELETE FROM guestbook where id='$id'";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>