<?php
include 'config.php';


$checkBox1 = implode(',', $_POST['qualif']);
$checkBox2 = implode(',', $_POST['lang']);

$stmt = $conn->prepare("INSERT INTO `userdetails`(`unique_id`, `name`, `email`, `gender`, `d_o_b`, `Religion`, `Caste`, `fname`, `foccup`, `mname`, `moccup`, `qualif`, `address`, `cnumber`, `degree`, `langs`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssssss",$_POST["uniqueid"],$_POST["name1"],$_POST["email"],$_POST["gender"],$_POST["dob"],
                    $_POST["religion"],$_POST["caste"],$_POST["fname"],$_POST["foccup"],$_POST["mname"]
                    ,$_POST["moccup"],$checkBox1,$_POST["address"],$_POST["number"]
                    ,$_POST["degree"],$checkBox2);

if ($stmt->execute() === TRUE) {
echo "<script>alert(\"Your registration has done successfully \" +'\\n'+ \" Your Unique ID is: ".$_POST["uniqueid"]."\");</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>