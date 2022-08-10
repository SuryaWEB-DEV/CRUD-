<form action="<?php echo base_url();?>/College/save_college/<?php if($row){ echo $row['id']; } ?>" method="post"
    <div>
        <label for="college_name">D Name</label>
        <input type="text" name="college_name" id="college_name" value="<?php if($row){ echo $row['college_name']; } ?>">
    </div>

    <div>
        <label for="college_date">D date</label>
        <input type="date" name="college_date" id="college_date" value="<?php if($row){ echo $row['college_date']; } ?>">

        
    </div>

    <button>submit</button>
</form>