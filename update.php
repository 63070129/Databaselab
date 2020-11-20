<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labpc129.mysql.database.azure.com', 'it63070129@labpc129', '029154897zZ', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $Result['ID']
$name = $Result['Name']
$comment = $Result['comment'];
$sql = "UPDATE guestbook SET  
            Name ='$name' ,
            Comment ='$comment' ,
            WHERE id='$id' ";
if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
