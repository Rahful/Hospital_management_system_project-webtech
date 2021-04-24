<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "project";

        // Mysqli object-oriented
        $conn1 = new mysqli($host, $user, $password, $db);

        if($conn1->connect_error) {
          echo "Database Connection Failed!";
          echo "<br>";
          echo $conn1->connect_error;
        }
        else {
        
           
           $p1= $_GET['id'];
           $stmt1 = $conn1->prepare("DELETE FROM `users` WHERE id=?");
           $stmt1->bind_param("s", $p1);
                            
			$status = $stmt1->execute();
            if($status) {
             $conn1->close();

           header("Location:../dashboard.php");
          }
       else {
       echo "Failed to Delete Data.";
       echo "<br>";
       echo $conn1->error;
 }
}
    ?>