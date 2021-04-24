<!DOCTYPE html>
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
          <a href="Admincreate.php" class="btn btn-big">Add Admin</a>
          <a href="Adminindex.php" class="btn btn-big">Manage Admin</a>
        </div>

        <div class="content">
          <h2 class="page-title">Manage Admin</h2>

          <table>
            <thead>
              <th>SN</th>
              <th>Username</th>
			   <th>Phone</th>
              <th>Email</th>
			        <th>Gender</th>
              <th colspan="2">Action</th>
            </thead>
			<?php include 'controllers/admincontroller.php';
			
			 $admin=getAllAdmin();
			?>
			<?php
				foreach($admin as $admin){
					echo "<tr>";
					echo "<td>".$admin["id"]."</td>";
					echo "<td>".$admin["username"]."</td>";
					echo "<td>".$admin["phone"]."</td>";
					echo "<td>".$admin["email"]."</td>";
					echo "<td>".$admin["gender"]."</td>";
					echo '<td><a href="#" class="edit">Edit</a></td>';
					echo '<td><a href="controllers/admindelete.php?id='.$admin["id"].'" class="delete">Delete</a></td>';
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
