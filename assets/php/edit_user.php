<?php

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli('localhost', 'root', '', 'zylagym_db');
$id = $_GET['id'];
$tablename = $_GET['tablename'];
$res = mysqli_query($conn, "SELECT * FROM $tablename WHERE id = '$id'");
$data = mysqli_fetch_array($res);
if (isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
        
    $email = $_POST['email'];
    
    $phone = $_POST['phone_number'];

    $pass = $_POST['password'];

    $edit = mysqli_query($conn, "update $tablename set name='$name', email='$email', password='$pass', phone_number='$phone' where id='$id'");

    if ($edit) {
        mysqli_close($conn);
        header("location:../adminpanel/clienti_admin.php");
        exit;
    }
}

?>

<form method="POST">
    <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Nume" Required>
    <input type="email" name="email" value="<?php echo $data['email'] ?>" placeholder="Email" Required>
    <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Parola" Required>
    <input type="number" name="phone_number" value="<?php echo $data['phone_number'] ?>" placeholder="Numar telefon" Required>
    <input type="submit" name="update" value="Update">
</form>