<?php
$searchKey=$output="";
if($_SERVER["REQUEST_METHOD"] == "GET") {

	 $_GET['searchKey'];
	$sql = "SELECT * FROM `admin` WHERE username LIKE '%".$_GET['searchKey']."%'";

	if(empty($_GET['searchKey'])) {
		$sql = "SELECT * FROM `admin`";
	}
	
	$conn = new mysqli("localhost", "root", "", "project");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {


$output .='<h4 align="center" >Search result</h4>';
$output .='
                <table>
                <thead>
				<th>SN</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Gender</th>
                </thead>';
    while($row=$result->fetch_assoc()){
        $output .= '<tbody>
                          <tr>
                            <td>'. $row['id'].'</td>
                            <td>'. $row['username'].'</td>
                            <td>'. $row['phone'].'</td>
                            <td>'. $row['email'].'</td>
                            <td>'. $row['gender'].'</td>
                           </tr>
                    </tbody>
                   ';
    }
echo $output;
}
else{
echo"data not found";
}
  }
}
?>