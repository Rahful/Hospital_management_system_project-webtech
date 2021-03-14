<?php
         $name="";
         $err_name="";
		 
        $uname="";
        $err_uname="";
		
        $pass="";
        $err_pass="";

        $mail="";
        $err_mail="";
		
        $phone="";
        $err_phone="";

        $city="";
        $err_city="";

        $state="";
        $err_state="";
        $zip="";
        $err_zip="";
        $address="";
        $err_address="";

        $date="";
        $err_date="";

        $month="";
        $err_month="";

        $year="";
        $err_year="";

        $gender="";
        $err_gender="";
       
		$Age="";
		$err_Age="";
		

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
			function ValidateEmail($email){
				$pos_at =strpos($email,"@");
				$pos_dot =strpos ($email,".",$pos_at+1);
				if($pos_at < $pos_dot){
					return true;
				}
				return false;
			}
			

           if(empty($_POST["mail"])){
                $err_mail="E-mail required";
            }
            else if(!ValidateEmail($_POST["mail"])){
				$err_mail="Not a Valid email";
			}


            if(empty($_POST["city"])|| empty($_POST["state"])||empty($_POST["zip"] )){
                $err_address="Address required";
            }
            
            else if(strpos($_POST["city"]," ")|| strpos($_POST["state"]," ")||strpos($_POST["zip"]," ")){
                $err_address="Address should not contain whitespace";
            }

            else{   
                $address=htmlspecialchars($_POST["city"].",".$_POST["state"].",".$_POST["zip"]);

            }

            if(empty($_POST["gender"])){
                $err_gender="Gender must be selected";
            }
            else{
                $gender=$_POST["gender"];
            }


            if(empty($_POST["date"])){
                $err_date="Date must be selected";
            }
            else{
                $date=$_POST["date"];
            }


            if(empty($_POST["month"])){
                $err_month="Month must be selected";
            }
            else{
                $month=$_POST["month"];
            }


            if(empty($_POST["year"])){
                $err_year="Year must be selected";
            }
            else{
                $byear=$_POST["year"];
            }
            if(empty($_POST["Age"])){
                $err_Age="Age required";
            }
           
        
        }
    ?>
<html>
<head>
</head>
<body>

        <fieldset>
            <legend><h1>Patient Survey Form</h1></legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><span><b>Name</b></span></td>
                        <td>: <input type="text" name="name" placeholder ="Name">
                            <span><?php echo $err_name;?></span></td>
                    </tr>
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
                        <td><span><b>Email</b></span></td>
                        <td>: <input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Phone</b></span></td>
                        <td>: <input type="text" name="code" placeholder ="ex.880" size='4'> - <input type="text" name="phone" placeholder ="ex.1700000000">
                        <span><?php echo $err_phone;?></span></td>
                    </tr>

                    <tr>
					<tr>
                        <td><span><b>Address</b></span></td>
						<td>: <input type="text" name="sa" placeholder="Street Address"></td>
						<tr>
                        <td> <td><input type="text" name="city" placeholder ="city" size='6'> - <input type="text" name="state" placeholder ="State" size='6'> </br>
                         <input type="text" name="zip" placeholder ="Postal zip code">
						 
                        <span><?php echo $err_address ;?></span>
                        <span><?php echo $err_city ;?></span>
                        <span><?php echo $err_city ;?></span></td></td>
						</tr>
                    </tr>
					<td><span><b>Birth Date</b></span></td>
                        <td>:<select name ="date">
                        <option disabled selected>Date</option>
                        <?php         for($date = 1; $date <= 31; $date++) echo"<option value = '".$date."'>".$date."</option>";     ?>
                        </select>

                        <select name ="month">
                        <option disabled selected>Month</option>
						<option>Jan</option>
							<option>Feb</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
                 
                        <select name ="year">
                        <option disabled selected>Year</option>
                        <?php         for($year = 1960; $year <= 2021; $year++)echo"<option value = '".$year."'>".$year."</option>";     ?>
                        </select>

                        <span><?php echo $err_date;?></span>
                        <span><?php echo $err_month;?></span>
                        <span><?php echo $err_year;?></span></td>
                    </tr>
						</select>
					</td>
				</tr>
                
                    <tr>
                        <td><span><b>Gender</b></span></td>
                        <td>: <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <span><?php echo $err_gender;?></span></td>
                    </tr>
					<tr>
                        <td><span><b>Age</b></span></td>
                        <td>: <input type="text" name="Age" placeholder ="Age">
                            <span><?php echo $err_Age;?></span></td>
                    </tr>
					
					<tr>
                        <td><span><b>Has you doctor ever said your blood pressure was too high or too low?</b></span></td>
                        <td>: <input type="radio" name="pressure"value="Yes">Yes
                            <input type="radio"name="pressure" value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Do you have any known cardiovascular problems (abnormal ECG, previous heart attack, etc)?</b></span></td>
                        <td>: <input type="radio" name="cardiovascular" value="Yes">Yes
                            <input type="radio"name="cardiovascular" value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Has your doctor ever told you that your cholesterol was too high?</b></span></td>
                        <td>: <input type="radio" name="cholesterol" value="Yes">Yes
                            <input type="radio"name="cholesterol" value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Have you (or a family member) ever been told that you have diabetes?</b></span></td>
                        <td>: <input type="radio"name="diabetes" value="Yes">Yes
                            <input type="radio"name="diabetes" value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Do you have any injuries or orthopedic problems (back, knees, etc)?</b></span></td>
                        <td>: <input type="radio"name="injuries" value="Yes">Yes
                            <input type="radio"name="injuries" value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Do you have tension or soreness in any area?</b></span></td>
                        <td>: <input type="radio"name="tension" value="Yes">Yes
                            <input type="radio"name="tension"value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Do you ever have problems sleeping?</b></span></td>
                        <td>: <input type="radio" name="sleeping"value="Yes">Yes
                            <input type="radio"name="sleeping"value="No">No
          
                    </tr>
					<tr>
                        <td><span><b>Do you have any other medical condition, injury or anything else we should be aware of that we have not mentioned?</b></span></td>
                        <td>: <input type="radio"name="condition" value="Yes">Yes
                            <input type="radio"name="condition"value="No">No
          
                    </tr>
					
			<tr>
				<td><td><input type="submit" name="Register" value="Submit Form"></td></td>
			</tr>

                </table>
			</form> 
    </fieldset>   
</body>
</html>