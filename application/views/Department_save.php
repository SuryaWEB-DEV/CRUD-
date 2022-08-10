<?php

$id = $_POST ['id'];
$student_name = $_POST ['department_name'];
$register_number= $_POST['department_date'];

if($id){
    $sql="UPDATE third SET department_name='$department_name',department_date='$department_date'where id='$id'";
}else{
$sql = "INSERT INTO third(department_name,department_date)
    VALUES ('department_name', 'department_date')";
}

$result=$conn->query($sql);

if($result){
    header("Location: Department_index.php");

}else{
    echo"Data Not Connected";
}


?>