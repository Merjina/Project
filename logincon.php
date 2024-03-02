<?php
include 'config.php';
session_start();
echo "Connected successfully";
echo "<br>";


$sql = "SELECT unique_id FROM userdetails WHERE unique_id='".$_POST["uniqueid"]."'";


//$sql = "SELECT unique_id FROM userdetails WHERE unique_id='".$_POST["uniqueid"]."' AND d_o_b='".$_POST["dob"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("Location: profilecode.php?uniqueid=".$_POST["uniqueid"]."");
    }
else{
    header("Location: loginpage.php?error=Incorect Unique id or D.O.B");
    }
$_SESSION['uniqueid'] = $_POST["uniqueid"];
?>