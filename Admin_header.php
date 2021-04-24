<?php 
session_start();
if(!isset ($_SESSION["user"])){
	header("Location:login.php");
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/admin-nav.css" />
    <link rel="stylesheet" href="styles/admin.css" />
	    <title>Admin Section - Manage Admin</title>
  </head>

  <body>
    <header class="header-area">
      <div class="title">
        <h1>Hospital Management System</h1>
      </div>
      <div class="navigation">
        <nav class="menu">
          <ul>
            <li>
              <a href="dashboard.php">Dashboard</a>
              <ul>
                <a href="logout.php" >Logout</a>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </header>