
<form action="<?php echo base_url();?>/Welcome/save_student/<?php if($row){ echo $row['id']; } ?>" method="post">
    <div>
        <label for="student_name">STUDENT NAME</label>
        <input type="text" name="student_name" id="student_name" value="<?php if($row){ echo $row['student_name']; } ?>">
<br>
        <label for="">REGISTER NUMBER</label>
        <input type="text" name="register_number" id="register_number" value="<?php if($row){ echo $row['register_number']; } ?>">
<br>
        <label for="college">College</label>
        <select name="college" id="college">
         <option value="">No Selected</option> 
         <?php 
          if($college_list){
          foreach($college_list as $dash){ ?>
          <option value="<?php echo $dash->id;?>"<?php if($dash->id=$row['college']){echo 'selected="selected"';}?>><?php echo $dash->college_name;?></option>
          <?php } }?> 
        </select>
<br>
        <label for="department">DEPARTMENT</label>
        <select name="department" id="department">
        <option value="">Select</option>
        <?php foreach ( $department_list as $list ){?>

        <option value="<?php echo $list->id; ?>"<?php if($list->id==$row['department']){ echo 'selected="selected"';} ?>><?php echo $list->department_name; ?></option>

        <?php }?>
        </select>
<br>     
        <label for="gender">GENTER:</label><br>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" <?php if($row){ if($row['gender']=='male'){ echo "checked "; }}?>>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female" <?php if($row){ if($row['gender']=='female'){ echo "checked "; }}?>>
<br>
        <label for="dob">DATE OF BIRTH</label>  
        <input type="date" name="dob" id="dob" value="<?php if($row){ echo $row['dob']; } ?>">
<br>
        <label for="blood group">BLOOD GROUP</label>
        <input type="text" name="blood_group" id="blood_group" value="<?php if($row){ echo $row['blood_group']; } ?>">
<br>
        <label for="mobilenumber">MOBILE NUMBER</label>
        <input type="text" name="mobile_number" id="mobile_number" value="<?php if($row){ echo $row['mobile_number']; } ?>">
<br>
        <label for="gmail">GMAIL</label>
        <input type="gmail" name="gmail" id="gmail" value="<?php if($row){ echo $row['gmail']; } ?>">
<br>
        <label for="sport">SPORT</label><br>
        <label for="volleyball">volleyball</label> 
        <input type="radio" name="sport" id="volleyball" value="volleyball" <?php if($row){ if($row['sport']=='volleyball'){ echo "checked "; }}?>>
        <label for="cricket">cricket</label>
        <input type="radio" name="sport" id="cricket" value="cricket" <?php if($row){ if($row['sport']=='cricket'){ echo "checked "; }}?>>
<br>
     <label for="address">ADDRESS</label><br>
    <textarea name="address" id="" cols="30" rows="10" id="address" value="<?php if($row){ echo $row['address']; } ?>"></textarea>
<br>
     <label for="username">Username:</label>
     <input type="text" name="username1" id="username" value="<?php if($row){ echo $row['username']; } ?>">
<br>
     <label for="password">Password:</label>
     <input type="text" name="password1"id="password" value="<?php if($row){ echo $row['password']; } ?>">
<br>
    
    <button>SUBMIT</button>
       
    </div>
</form>
