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
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="Accountantcreate.php" class="btn btn-big">Add Accountant</a>
          <a href="Accountantindex.php" class="btn btn-big">Manage Accountant</a>
        </div>

        <div class="content">
          <h2 class="page-title">Add Accountant</h2>

          
		  <?php include 'addAccountant.php';?>
          
          
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
