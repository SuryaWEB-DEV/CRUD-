<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?php echo base_url();?>/College/add_college">ADD</a><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>College NAME</th><br>
                    <th>College DATE</th>
                </tr>
            </thead>
<?php
foreach ($College_list as $row) { ?>
 <tr>
     <td><?php echo $row['college_name']; ?></td>
     <td><?php echo $row['college_date']; ?></td>
     <td>
        <a href="<?php echo base_url();?>/College/add_college/<?php echo $row['id'];?>">Edit</a>
        <a href="<?php echo base_url();?>/College/delete_college/<?php echo $row['id']?>">Delete</a>
     </td>
 </tr> 
    <?php } ?>           
    </table>
    </div>
</body>
</html>