<?php include 'Admin_header.php';?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="Adminindex.php">Manage Admin</a></li>
          <li><a href="Doctorsindex.php">Manage Doctor</a></li>
          <li><a href="Accountantindex.php">Manage Accountant</a></li>
		  <li><a href="userssearch.php">Search Users</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="dashboard.php" class="btn btn-big">Manage Users</a>
        </div>
<?php include 'controllers/updateuserstcontroller.php';
 $id = $_GET["id"];
$query ="SELECT * FROM users WHERE ID='$id'";
$result=get($query);
foreach($result as $users){
	$name=$users["name"];
	$user_name=$users["username"];
	$email=$users["email"];
}
?>
<html>
<body>
        
        
        <fieldset>
        <legend><h1>Update Users</h1></legend>
		<div id="add-Btn" >
        <form action="" onsubmit="return validate()" method="post">
            <table>
				<tr>
				 <input style="display:none" type="text" name="id" value="<?php echo $id;?>" placeholder="id">
					<td><span><b>Name</b></span></td>
                    <td>: <input type="text" id="name" name="name"  value="<?php echo $name;?>" placeholder="<?php echo $name; ?>">
                        <span id="err_name"><?php echo $err_name; ?></span></br>
                    </td>

                </tr>
                <tr>
					<td><span><b>User Name</b></span></td>
                    <td>: <input type="text" id="user_name" name="user_name" onfocusout="checkUsername(this)"  value="<?php echo $user_name;?>" placeholder="<?php echo $user_name; ?>">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>
                <tr>
				<td><span><b>E-mail</b></span></td>
                    <td>: <input type="text" id="email" name="email" value="<?php echo $email; ?>" >
                        <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
           
				<tr>
				<td><td><input type="submit" id="add-Btn" name="update_user" value="Update User"></td></td>
			</tr>
            </table>
        </form>
		</fieldset> 
    </div>
</body>
</html>