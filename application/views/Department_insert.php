<form action="<?php echo base_url();?>/Department/save_department/<?php if($row){ echo $row['id']; } ?>" method="post"
    <div>
        <label for="department_name">D Name</label>
        <input type="text" name="department_name" id="department_name" value="<?php if($row){ echo $row['department_name']; } ?>">
    </div>

    <div>
        <label for="department_date">D date</label>
        <input type="date" name="department_date" id="department_date" value="<?php if($row){ echo $row['department_date']; } ?>">

        
    </div>

    <button>submit</button>
</form>