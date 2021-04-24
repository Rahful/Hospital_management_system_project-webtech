<?php include 'controllers/addadmincontroller.php';?>
<html>
<body>
        
        
        <fieldset>
        <legend><h1>Add Admin</h1></legend>
		<div id="add-Btn" >
        <form action="" onsubmit="return validate()" method="post">
            <table>

                <tr>
					<td><span><b>User Name</b></span></td>
                    <td>: <input type="text" id="user_name" name="user_name" onfocusout="checkUsername(this)"  value="<?php echo $user_name; ?>" placeholder="<?php echo $user_name; ?>">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>
                <tr>
				 <td><span><b>Password</b></span></td>
                    <td>: <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" placeholder="<?php echo $pass; ?>">
                        <span id="err_pass"><?php echo $err_pass; ?></span>
                    </td>
                </tr>
				
                <tr>
                    
					<td><span><b>Phone</b></span></td>
                      <td>:<input type="text" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="<?php echo $contact_number; ?>">
                        <span id="err_contact_number"><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
                <tr>
				<td><span><b>E-mail</b></span></td>
                    <td>: <input type="text" id="email" name="email" value="<?php echo $email; ?>" >
                        <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
                <tr>
				<td><span><b>Gender</b></span></td>
                    <td>: <input type="radio" id="gender1" name="gender" value="Male">Male
                        <input type="radio" id="gender2" name="gender" value="Female">Female
                        <span id="err_gender"><?php echo $err_gender; ?></span>
                    </td>

                </tr>
				<tr>
				<td><td><input type="submit" id="add-Btn" name="Add_admin" value="Add Admin"></td></td>
			</tr>
            </table>
        </form>
		</fieldset> 
    </div>
</body>
<script src="JS/jsvalidationadmin.js"></script>
</html>