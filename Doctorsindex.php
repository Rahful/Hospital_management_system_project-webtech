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
		  <li><a href="doctorsearch.php">Search Doctor</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="Doctorscreate.php" class="btn btn-big">Add Doctor</a>
          <a href="Doctorsindex.php" class="btn btn-big">Doctor list</a>
        </div>

        <div class="content">
          <h2 class="page-title">Doctor list </h2>

          <table>
            <thead>
              <th>SN</th>
              <th>Username</th>
			   <th>Phone</th>
              <th>Email</th>
			   <th>Gender</th>
			   <th>specialized</th>
				<th>Time-schedule</th>
			   
              <th colspan="2">Action</th>
            </thead>
			<?php include 'controllers/admincontroller.php';
			
			 $doctor=getAlldoctor();
			?>
			<?php
				foreach($doctor as $doctor){
					echo "<tr>";
					echo "<td>".$doctor["id"]."</td>";
					echo "<td>".$doctor["username"]."</td>";
					echo "<td>".$doctor["phone"]."</td>";
					echo "<td>".$doctor["email"]."</td>";
					echo "<td>".$doctor["gender"]."</td>";
					echo "<td>".$doctor["specialized"]."</td>";
					echo "<td>".$doctor["schedule"]."</td>";
					echo '<td><a href="editdoctor.php?id='.$doctor["id"].'" class="edit">Edit</a></td>';
					echo '<td><a href="controllers/doctordelete.php?id='.$doctor["id"].'" class="delete">Delete</a></td>';
					echo "</tr>";
				}
			?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
