<?php

include "insert.php";

$id = $_GET['ID'];

$del = mysqli_query($db,"delete from tblemp where id = '$id'");

if($del)
{
    mysqli_close($db);
    header("location:show.php");
    exit;	
}
else
{
    echo "Error deleting record";
?>