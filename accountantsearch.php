<!Doctype html>
<html>

<head>

    <title>Accountant Search List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin-nav.css" />
    <link rel="stylesheet" href="styles/admin.css" />
   
  <script>
			function search() {
			var searchKey = document.getElementById("searchKey").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p2").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "searchindexaccountant.php?searchKey=" + searchKey, true);
			xhttp.send();
		}

</script>
</head>

<body>
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
        
        <div class="content">
    <h2>Accountant search List</h2>
     <br>
     <label for="searchKey">UserName:</label>
	<input type="text" name="searchKey" id="searchKey">

	<button id="search" onclick="search()">Search</button>

<br>
<br>
<div id="p2"></div>
</div>
 </div>
</body>


</html>