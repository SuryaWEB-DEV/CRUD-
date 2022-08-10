<?php

$id = $_POST ['id'];
$student_name = $_POST ['college_name'];
$register_number= $_POST['college_date'];

if($id){
    $sql="UPDATE third SET college_name='$college_name',college_date='$college_date'where id='$id'";
}else{
$sql = "INSERT INTO third(college_name,college_date)
    VALUES ('$college_name', '$college_date')";
}

$result=$conn->query($sql);

if($result){
    header("Location: College_index.php");

}else{
    echo"Data Not Connected";
}


?>