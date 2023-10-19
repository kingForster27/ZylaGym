<?php 
$conn = new mysqli('localhost', 'root', '', 'zylagym_db');
$id = $_GET['id'];
$tablename = $_GET['tablename'];
$del = mysqli_query($conn, "delete from $tablename where id = '$id'");

if($del)
{
    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;	
}
else
{
    echo "Error deleting record";
}

?>