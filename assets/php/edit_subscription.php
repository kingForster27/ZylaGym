<?php

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli('localhost', 'root', '', 'zylagym_db');
$id = $_GET['id'];
$tablename = $_GET['tablename'];
$res = mysqli_query($conn, "SELECT * FROM $tablename WHERE id = '$id'");
$data = mysqli_fetch_array($res);
if (isset($_POST['update'])) // when click on Update button
{
    
    $recurrence = $_POST['recurrence'];
                                                    
    $subscription_plan = $_POST['subscription_plan'];
                                                    
    $date_start = $_POST['date'];
    
    $date_end = date('Y-m-d', strtotime($date_start . ' +30 days'));
    
  $edit = mysqli_query($conn, "update $tablename set subscription_plan='$subscription_plan', recurrence='$recurrence', date_start='$date_start', date_end='$date_end' where id='$id'");

  if ($edit) {
    mysqli_close($conn);
    header("location:../adminpanel/abonamente_admin.php");
    exit;
  }
}

?>

<h3>Update Data</h3>
<form method="POST">
    <p><select value="<?php echo $data['subscription_plan'] ?>" name="subscription_plan">
            <option value="Plan 50 lei">Abonament 50 Lei</option>
            <option value="Plan 125 lei">Abonament 125 Lei</option>
            <option value="Plan 200 lei">Abonament 200 Lei</option>
            <option value="Plan 300 lei">Abonament 300 Lei</option>
        </select></p>
    <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="recurrence" id="radio_0" type="radio" <?php if (isset($recurrence) && $recurrence=="Da") echo "checked";?> value="Da">
            <label for="radio_0">Da</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="recurrence" id="radio_1" type="radio" <?php if (isset($recurrence) && $recurrence=="Nu") echo "checked";?> value="Nu">
            <label for="radio_1">Nu</label>
        </div>
    </div>
    <input type="date" name="date" value="<?php echo $data['date_start'] ?>" placeholder="Data incepere" Required>

    <input type="submit" name="update" value="Update">
</form>
