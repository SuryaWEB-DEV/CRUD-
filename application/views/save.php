<?php

include'connect.php';
$id = $_POST ['id'];
$student_name = $_POST ['student_name'];
$register_number= $_POST['register_number'];
$college = $_POST ['college'];
$department = $_POST ['department'];
$gender = $_POST ['gender'];
$dob = $_POST ['dob'];
$blood_group = $_POST ['blood_group'];
$mobile_number = $_POST ['mobile_number'];
$gmail = $_POST ['gmail'];
$sport = $_POST ['sport'];
$address = $_POST ['address'];

if($id){
    $sql = "UPDATE second SET student_name='$student_name',register_number='$register_number',college='$college',department='$department',
    gender='$gender',dob='$dob',blood_group='$blood_group',mobile_number='$mobile_number',gmail='$gmail',sport='$sport',address='$address' where id='$id'";
}else{
$sql = "INSERT INTO second (student_name,register_number,college,department,gender,dob,blood_group,mobile_number,gmail,sport,address)
    VALUES ('$student_name', '$register_number','$college','$department','$gender','$dob ','$blood_group ','$mobile_number ','$gmail','$sport','$address')";
}

//print_r($id);
//exit;

$result=$conn->query($sql);

if($result){
    header("Location: index.php");

}else{
    echo"Data Not Connected";
}


?>