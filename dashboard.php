<!DOCTYPE html>
<?php 
include 'Admin_header.php';
?>

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
        
        <div class="content">
        <h2 class="page-title">Welcome <?php echo $_SESSION["user"];?> To your Users Dashboard</h2>
		

          <table>
            <thead>
              <th>SN</th>
			  <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th colspan="2">Action</th>
            </thead>
			<?php include 'controllers/admincontroller.php';
			
			 $users=getAllusers();
			?>
			<?php
				foreach($users as $users){
					echo "<tr>";
					echo "<td>".$users["id"]."</td>";
					echo "<td>".$users["name"]."</td>";
					echo "<td>".$users["username"]."</td>";
					echo "<td>".$users["email"]."</td>";
					echo '<td><a href="editusers.php?id='.$users["id"].'" class="edit">Edit</a></td>';
					echo '<td><a href="controllers/usersdelete.php?id='.$users["id"].'" class="delete">Delete</a></td>';
					echo "</tr>";
				}
			?>
            
          </table>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
