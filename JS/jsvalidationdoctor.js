var user_name=document.getElementById("user_name");
var pass=document.getElementById("pass");
var gender1 = document.getElementById("gender1");
var gender2 = document.getElementById("gender2");
var Specialization1 = document.getElementById("Specialization1");
var Specialization2 = document.getElementById("Specialization2");
var Specialization3 = document.getElementById("Specialization3");
var email=document.getElementById("email");
var contact_number=document.getElementById("contact_number");
//validate email check
  function validateEmail(email){
    var pos_at=email.indexOf("@");
    var pos_dot=email.indexOf(".",pos_at+1);
    if(pos_at<pos_dot){
        return true;
    }
    return false;
  }

 // checking lower and upper characters
  function validatePass(s){
      hasUpper=false;
      hasLower=false;
    for(var i=0;i<s.length;i++){
        if(s[i]==s[i].toUpperCase()){
            hasUpper=true;
        }
        else{
            hasUpper=hasUpper;
        }
        if(s[i]==s[i].toLowerCase()){
            hasLower=true;
        }
        else{
            hasLower=hasLower;
        }
    }
    if(hasLower==false||hasUpper==false){
        return false;
    }
    else{
        return true;
    }
  }


function validate(){
    refresh();
    hasError= false;

    // User name validation
    if(user_name.value==""){
        document.getElementById("err_user_name").innerHTML="*User name is required";
        document.getElementById("err_user_name").style.color = "red";
        hasError=true; 
    }
    else if(user_name.value.length<4){
        document.getElementById("err_user_name").innerHTML="*User name must be more than 4 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(user_name.value)){
        document.getElementById("err_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }


    //pass validation
    if(pass.value==""){
        document.getElementById("err_pass").innerHTML="*Password is required";
        document.getElementById("err_pass").style.color = "red";
        hasError=true; 
    }
    else if(pass.value.length<8){
        document.getElementById("err_pass").innerHTML="*Password must be more than 8 characters";
        hasError=true;
    }
    else if(hasWhiteSpace(pass.value)){
       document.getElementById("err_pass").innerHTML="*Password cant contain whitespace";
       hasError=true; 
    }
    else if(!hasSpecialChar(pass.value)){
        document.getElementById("err_pass").innerHTML="*Password must contain # or @";
        hasError=true;
    }
    else if(!validatePass(pass.value)){
        document.getElementById("err_pass").innerHTML="*Password must contain upper and lower characters";
        hasError=true;
    }

      //gender checking
  if (gender1.checked) {
    hasError = false;
  }
  else if (gender2.checked) {
    hasError = false;
  }
  else {
    document.getElementById("err_gender").innerHTML = "*Gender is required";
    document.getElementById("err_gender").style.color = "red";
    hasError = true;
  }
   //Specialization checking
   if (Specialization1.checked) {
    hasError = false;
  }
  else if (Specialization2.checked) {
    hasError = false;
  }
  else if (Specialization3.checked) {
    hasError = false;
  }
  else{
        document.getElementById("err_Specialization").innerHTML="*Specialization must be required";
		document.getElementById("err_Specialization").style.color = "red";
        hasError=true; 
    }
    //email checking
    if(email.value==""){
        document.getElementById("err_email").innerHTML="*Email is required";
        document.getElementById("err_email").style.color = "red";
        hasError=true; 
    }
    else if(!hasAttherate(email.value)){
        document.getElementById("err_email").innerHTML="*Email must contain @";
        hasError=true;
    }
    else if(!validateEmail(email.value)){
        document.getElementById("err_email").innerHTML="*Email is invalid";
        document.getElementById("err_email").style.color = "red";
        hasError=true;
    }
    
    //Phone number validation
    if(contact_number.value==""){
        document.getElementById("err_contact_number").innerHTML="*Contact number is required";
        document.getElementById("err_contact_number").style.color = "red";
        hasError=true; 
    }
    else if(isNaN(contact_number.value)){
        document.getElementById("err_contact_number").innerHTML="*Contact should contain only number";
        asError=true; 
    }
    else if(hasWhiteSpace(contact_number.value)){
        document.getElementById("err_contact_number").innerHTML="*Contact number cant contain whitespace";
        hasError=true; 
     }
    else if(contact_number.value.length<11){
        document.getElementById("err_contact_number").innerHTML="*Contact number must contain 11 digits";
        hasError=true;
    }
   
	//time schedule checking
	if(time.value==""){
        document.getElementById("err_time").innerHTML="*Time schedule required";
		document.getElementById("err_time").style.color = "red";
        hasError=true; 
    }




return !hasError;
}
function refresh(){
    document.getElementById("err_user_name").innerHTML="";
    document.getElementById("err_pass").innerHTML="";
    document.getElementById("err_gender").innerHTML="";
    document.getElementById("err_email").innerHTML="";
    document.getElementById("err_contact_number").innerHTML="";
    document.getElementById("err_Specialization").innerHTML="";
    document.getElementById("err_time").innerHTML="";
}
function checkUsername(user_name){
    //alert(user_name.value);
  var user_name=user_name.value;
  var xHttp= new XMLHttpRequest();
  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        if(rs==="true"){
            document.getElementById("err_user_name").innerHTML="";
        }
        else{
            document.getElementById("err_user_name").innerHTML="UserName is Not valid";
        }
      }
  };
  xHttp.open("GET","checkUsernamedoctor.php?user_name="+user_name,true);
  xHttp.send();
}