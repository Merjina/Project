<?php
include 'config.php';


$checkBox1 = implode(',', $_POST['qualif']);
$checkBox2 = implode(',', $_POST['lang']);

$sql  = "UPDATE `userdetails` SET `name`='".$_POST["name1"]."',`email`='".$_POST["email"]."',`gender`='".$_POST["gender"]."',`d_o_b`='".$_POST["dob"]."',`Religion`='".$_POST["religion"]."',`Caste`='".$_POST["caste"]."',`fname`='".$_POST["fname"]."',`foccup`='".$_POST["foccup"]."',`mname`='".$_POST["mname"]."',`moccup`='".$_POST["moccup"]."',`qualif`='".$checkBox1."',`address`='".$_POST["address"]."',`cnumber`='".$_POST["number"]."',`degree`='".$_POST["degree"]."',`langs`='".$checkBox2."' WHERE `unique_id`='".$_POST["uniqueid"]."'";


if ($conn->query($sql)){
    header("Location: profilecode.php?uniqueid=".$_POST["uniqueid"]."");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>