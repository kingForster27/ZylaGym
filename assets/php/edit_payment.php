<?php

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli('localhost', 'root', '', 'zylagym_db');
$id = $_GET['id'];
$tablename = $_GET['tablename'];
$res = mysqli_query($conn, "SELECT * FROM $tablename WHERE id = '$id'");
$data = mysqli_fetch_array($res);
if (isset($_POST['update'])) // when click on Update button
{
  $card_number = $_POST['card_number'];
  $card_date = $_POST['card_date'];
  $cvv = $_POST['cvv'];
    
  $edit = mysqli_query($conn, "update $tablename set card_number='$card_number', card_date='$card_date', cvv='$cvv' where id='$id'");

  if ($edit) {
    mysqli_close($conn);
    header("location:../adminpanel/plati_admin.php");
    exit;
  }
}

?>

<h3>Update Data</h3>
<form method="POST">
    <input type="number" name="card_number" value="<?php echo $data['card_number'] ?>" placeholder="Numar card" Required>
    <input type="month" name="card_date" value="<?php echo $data['card_date'] ?>" placeholder="Data expirare card" Required>
    <input type="number" name="cvv" value="<?php echo $data['cvv'] ?>" placeholder="CVV" Required>

    <input type="submit" name="update" value="Update">
</form>
