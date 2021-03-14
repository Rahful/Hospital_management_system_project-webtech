<?php
		 
        $uname="";
        $err_uname="";
		
        $pass="";
        $err_pass="";
		

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $err_name="Name required";
            }
            else if(strlen($_POST["name"]) < 6){
                $err_name="Name must be more than 6 characters long";
            }
            else if(strpos($_POST["name"]," ")){
                $err_name="Name should not contain whitespace";
            }

            else{   
                $name=htmlspecialchars($_POST["name"]);

            }

            if(empty($_POST["uname"])){
                $err_uname="User name required";
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="Username must be more than 6 characters long";
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Username should not contain whitespace";
            }

            else{   
                $uname=$_POST["uname"];

            }
           if(empty($_POST["pass"])){
			$err_pass="Enter your password";	
		}
		else if(strlen($_POST["pass"])<4){
			$err_pass="Password must be more than 4 characters long";
			$pass="";
		}
		else if(strpos($_POST["pass"]," ")){
			$err_pass="Password should not contain whitespace";
		}

		else{   
			$pass=$_POST["pass"];

		}
		}
    ?>
<html>
<head>
</head>
<body>

        <fieldset>
            <legend><h1>Admin Login</h1></legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><span><b>Username</b></span></td>
                        <td>: <input type="text" name="uname" placeholder ="Username">
                            <span><?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Password</b></span></td>
                        <td>: <input type="password" name="pass" placeholder ="Password">
                        <span><?php echo $err_pass;?></span></td>
                    </tr>
			<tr>
				<td><td><input type="submit" name="Login" value="Login"></td></td>
			</tr>

                </table>
			</form> 
    </fieldset>   
</body>
</html>