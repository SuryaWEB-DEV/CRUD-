<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo base_url();?>/User/check_user" method="post">
   <h1>LOGIN</h1>

   <label for="username">USERNAME</label>
   <input type="text" name="username" id="username">
  <br> 
   <label for="password">PASSWORD</label>
   <input type="password" name="password" id="password">
   
<input type="submit">


</form>






<!-- <div>
    <table>
        <thead>
            <tr>
                <td></td>
            </tr>
        </thead>
    </table>
</div> -->
    
</body>
</html>