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
		  <li><a href="accountantsearch.php">Search Accountant</a></li>
		  
        </ul>
      </div>
      <div class="admin-content">
        <div class="button-group">
          <a href="Accountantcreate.php" class="btn btn-big">Add Accountant</a>
          <a href="Accountantindex.php" class="btn btn-big">Manage Accountant</a>
        </div>

        <div class="content">
          <h2 class="page-title">Manage Accountant</h2>

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
			
			 $accountant=getAllAccountant();
			?>
			<?php
				foreach($accountant as $accountant){
					echo "<tr>";
					echo "<td>".$accountant["id"]."</td>";
					echo "<td>".$accountant["username"]."</td>";
					echo "<td>".$accountant["phone"]."</td>";
					echo "<td>".$accountant["email"]."</td>";
					echo "<td>".$accountant["gender"]."</td>";
					echo '<td><a href="#" class="edit">Edit</a></td>';
					echo '<td><a href="controllers/accountantdelete.php?id='.$accountant["id"].'" class="delete">Delete</a></td>';
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
