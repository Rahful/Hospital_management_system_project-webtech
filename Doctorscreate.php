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
          <a href="Doctorsindex.php" class="btn btn-big">Manage Doctor</a>
        </div>

        <div class="content">
          <h2 class="page-title">Add Doctor</h2>
		  <?php include 'addDoctor.php';?>
          
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
