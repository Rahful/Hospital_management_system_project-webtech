<?php include 'Admin_header.php';?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="Adminindex.php">Manage Admin</a></li>
          <li><a href="Doctorsindex.php">Manage Doctor</a></li>
          <li><a href="Accountantindex.php">Manage Accountant</a></li>
		  <li><a href="adminsearch.php">Search Admin</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="Doctorscreate.php" class="btn btn-big">Add Doctor</a>
          <a href="Doctorsindex.php" class="btn btn-big">Doctor list</a>
        </div>
<?php include 'controllers/updatedoctorcontroller.php';
 $id = $_GET["id"];
$query ="SELECT * FROM doctor WHERE ID='$id'";
$result=get($query);
foreach($result as $doctor){
	$user_name=$doctor["username"];
	$contact_number=$doctor["phone"];
	$email=$doctor["email"];
	$time =$doctor["schedule"];
}
?>
<html>
<body>
        
        
        <fieldset>
        <legend><h1>Update Doctor</h1></legend>
		<div id="add-Btn" >
        <form action="" onsubmit="return validate()" method="post">
            <table>

                <tr>
				 <input style="display:none" type="text" name="id" value="<?php echo $id;?>" placeholder="id">
					<td><span><b>User Name</b></span></td>
                    <td>: <input type="text" id="user_name" name="user_name" onfocusout="checkUsername(this)"  value="<?php echo $user_name;?>" placeholder="<?php echo $user_name; ?>">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>
				
                <tr>
                    
					<td><span><b>Phone</b></span></td>
                      <td>:<input type="text" id="contact_number" name="contact_number" value="<?php echo $contact_number;?>"
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
				<tr>
                        <td><span><b>Time schedule </b></span></td>
                        <td>: <input type="text" id="time" name="time" value="<?php echo $time; ?>">
						<span id="err_time"><?php echo $err_time; ?></span></td>
						</tr>
			    <tr>
				<td><td><input type="submit" id="add-Btn" name="update_doctor" value="Update doctor"></td></td>
			</tr>
            </table>
        </form>
		</fieldset> 
    </div>
</body>
</html>