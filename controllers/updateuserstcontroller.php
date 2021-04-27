<?php require_once 'models/db_config.php';
$query = "SELECT * FROM users";
$result=get($query);

if(isset($_POST))
{
    $result=get($query);
}
    $id="";
    $err_id="";
	$name="";
	$err_name="";
    $user_name="";
    $err_user_name="";      
	$email = "";
    $err_email = "";
    
    $hasError = false;

function validateEmail($email)
{
    $pos_at = strpos($email, "@");
    $pos_dot = strpos($email, ".", $pos_at + 1);
    if ($pos_at < $pos_dot) {
        return true;
    }
    return false;
}
$result = [];
if(isset($_POST["update_user"])){
	if($_SERVER["REQUEST_METHOD"]=="POST")
    { if (empty($_POST["name"])) {
            $err_name = "Please enter your user name";
            $hasError = true;
        }
        elseif (strlen($_POST["name"]) < 4) {
            $err_name = "First Name must be more than 4 characters";
            $hasError = true;
        } 
        elseif (strpos($_POST["name"], " ")) {
            $err_name = "Whitespace is not allowed";
            $hasError = true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
    
        if (empty($_POST["user_name"])) {
            $err_user_name = "Please enter your user name";
            $hasError = true;
        }
        elseif (strlen($_POST["user_name"]) < 4) {
            $err_user_name = "First Name must be more than 4 characters";
            $hasError = true;
        } 
        elseif (strpos($_POST["user_name"], " ")) {
            $err_user_name = "Whitespace is not allowed";
            $hasError = true;
        }
        else{
            $user_name=htmlspecialchars($_POST["user_name"]);
        }
    
        if (empty($_POST["email"])) {
            $err_email = "Email Required";
            $hasError = true;
        }
        elseif(!strpos($_POST["email"],"@")){
            $err_email="Add @";
            $hasError=true;
    
        }
        elseif (!validateEmail($_POST["email"])) {
            $err_email = "Insert a valid email";
            $hasError = true;
        }
        else {
            $email = htmlspecialchars($_POST["email"]);
        }
    
	}
    
	if(!$hasError){
	$id = $_POST['id'];
	$name=$_POST["name"];
	$user_name=$_POST["user_name"];
	$email=$_POST["email"];
	
  if(!$hasError){
    $update_query = "UPDATE users SET name='$name',username='$user_name',email='$email' WHERE ID='$id'";
     
    execute($update_query);
	echo"</br>";
    echo "Updated.....";
  }
	}
}
  
?>