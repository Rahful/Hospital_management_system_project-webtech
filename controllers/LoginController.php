<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	 $email="";
     $err_email="";
	$password="";
    $err_password="";
	$username="";
    $err_username="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="<br>Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="<br>Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
			
		}
		function ValidateEmail($email){
				$pos_at =strpos($email,"@");
				$pos_dot =strpos ($email,".",$pos_at+1);
				if($pos_at < $pos_dot){
					return true;
				}
				return false;
			}
			

           if(empty($_POST["email"])){
                $err_email="E-mail required";
				$hasError=true;
            }
            else if(!ValidateEmail($_POST["email"])){
				$err_email="Not a Valid email";
				$hasError=true;
			}
			else{   
                $email=$_POST["email"];
    
            }
		if(empty($_POST["password"])){
                $err_password="Enter your password";
					$hasError=true;
            }
            else if(strlen($_POST["password"])<4){
                $err_password="Password must be more than 4 characters long";
				$hasError=true;
				
            }
            else if(strpos($_POST["password"]," ")){
                $err_pass="Password should not contain whitespace";
				$hasError=true;
            }
    
            else{   
                $password=$_POST["password"];
    
            }
		if(!$hasError){
			insertUser($name,$uname,$email,$password);
		}
	}
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="<br>*User Name Required";
			$hasError=true;
		}else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
                $err_password="*Enter your password";
					$hasError=true;
            }
    
            else{   
                $password=$_POST["password"];
				}
		if(authenticateUser($_POST["username"],$_POST['password'])){
			session_start();
			$_SESSION["user"] =$username;
			header("Location: dashboard.php");
		}
		else{
			echo "Give A valid username or password";
		}
		
	}
	
	function insertUser($name,$username,$email,$password){
		$query = "INSERT INTO users VALUES (NULL,'$name','$username','$email','$password')";
		execute($query);
		
	}
	function authenticateUser($username,$password){
		$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = get($query);
		if(count($result)>0){
			return true;
		}
		return false;
	}

?>