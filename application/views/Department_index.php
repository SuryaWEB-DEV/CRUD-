<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?php echo base_url();?>/Department/add_department">ADD</a><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>DEPARTMENT NAME</th><br>
                    <th>DEPARTMENT DATE</th>
                </tr>
            </thead>
<?php
foreach ($Department_list as $row) { ?>
 <tr>
     <td><?php echo $row['department_name']; ?></td>
     <td><?php echo $row['department_date']; ?></td>
     <td>
        <a href="<?php echo base_url();?>/Department/add_department/<?php echo $row['id'];?>">Edit</a>
        <a href="<?php echo base_url();?>/Department/delete_department/<?php echo $row['id']?>">Delete</a>
     </td>
 </tr> 
    <?php } ?>           
    </table>
    </div>
</body>
</html>