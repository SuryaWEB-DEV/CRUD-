<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
<a href="<?php echo base_url();?>/Welcome/add_student">ADD</a><br>
<a href="<?php echo base_url();?>/Department/">ADD Department</a><br>
<a href="<?php echo base_url();?>/College/">ADD COllege</a><br>
<div>

<stlye>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
<?php
echo $firstname=$this->session->userdata('firstname');
?>
<br>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
<?php
echo $createdby=$this->session->userdata('createdby');
?>

</style>
<table>
        <thead>
            <tr>
                <th>STUDENT NAME</th>
                <th>REGISTER NUMBER</th>
                <th>COLLEGE NAME</th>
                <th>DEPARTMENT</th>
                <th>DOB</th>
                <th>GENDER</th>
                <th>BLOOD GROUP</th>
                <th>MOBILE NUMBER</th>
                <th>GMAIL</th>
                <th>SPORT</th>
                <th>ADDRESS</th>
            </tr>
        </thead>
<?php
foreach ($student_list as $row) { ?>
 <tr>
     <td><?php echo $row['student_name']; ?></td>
     <td><?php echo $row['register_number']; ?></td>
     <td><?php echo $row['college_name']; ?></td>
     <td><?php echo $row['department_name']; ?></td>
     <td><?php echo $row['gender']; ?></td>
     <td><?php echo $row['dob']; ?></td>
     <td><?php echo $row['blood_group']; ?></td>
     <td><?php echo $row['mobile_number']; ?></td>
     <td><?php echo $row['gmail']; ?></td>
     <td><?php echo $row['sport']; ?></td>
     <td><?php echo $row['address']; ?></td>

     <td>
        <a href="<?php echo base_url();?>/Welcome/add_student/<?php echo $row['id'];?>">Edit</a>
        <a href="<?php echo base_url();?>/Welcome/delete_student/<?php echo $row['id']?>">Delete</a>
     </td>
</tr>
<?php } ?>
</table>
</body>
</html>