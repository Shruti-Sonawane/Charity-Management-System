    <!DOCTYPE html>  
    <html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style>  
    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color:#808080;
     margin: auto;
     color: white;
      width:1000px;
       
    }  
    .container {  
        padding: 50px;  
      background-color:#002a77;  
    }  
      
    input[type=text], input[type=password], textarea {  
      width: 100%;  
      padding: 15px;  
      margin: 5px 0 15px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1;  
    }  
    input[type=text]:focus, input[type=password]:focus {  
      background-color: orange;  
      outline: none;  
    }  
     div {  
                padding: 10px 0;  
             }  
    hr {  
      border: 1px solid #f1f1f1;  
      margin-bottom: 25px;  
    }  
    .registerbtn {  
      background-color: #4CAF50;  
      color: white;  
      padding: 16px 20px;  
      margin: 8px 0;  
      border: none;  
      cursor: pointer;  
      width: 100%;
      text-align: center;  
      opacity: 0.9;  
    }  
    .registerbtn:hover {  
      opacity: 1;  
    }  

a:link {
  color: white;
  background-color: white;
  text-decoration: underline;
}
 h4{
     color:red;
   }


    </style>  
    </head>  
    <body>  



    <center><div id="header" ><h2 style="color:white">WELCOME  TO  GIVE  A  LITTLE  FOUNDATION  :)</h2></div></center>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="CSS/nav.css" type="text/css" />
<div id="stylefive">
  <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="donor.php">Donate Us</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="Volunteer.php">Join Us</a></li>
                  <li><a href="contactus.html">Contact Us</a></li>
		  <li><a href="logout.php">Log Out</a></li> 
  </ul>
</div>
<?php
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];



$name_err=$name1_err=$name2_err=$email_err=$address_err=$password_err=$password1_err=$mobile_err=$gender_err="";
$name=$name1=$name2=$email=$mobileno=$gender=$address=$password=$password1="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if($_POST['firstname']=="")
     $name_err="FirstName is required";
  else
  {
     $name=input_data($_POST['firstname']);
     if(!preg_match("/^[a-zA-Z_]*$/",$name))
        $name_err="Only alphabets and white space are allowed.";
  }
  
  if($_POST['middlename']=="")
     $name1_err="MiddleName is required";
  else
  {
     $name1=input_data($_POST['middlename']);
     if(!preg_match("/^[a-zA-Z]*$/",$name1))
        $name1_err="Only alphabets and white space are allowed.";
  }
  
 if($_POST['lastname']=="")
     $name2_err="LastName is required";
  else
  {
     $name2=input_data($_POST['lastname']);
     if(!preg_match("/^[a-zA-Z]*$/",$name2))
        $name2_err="Only alphabets and white space are allowed.";
  }

  if($_POST['email']=="")
     $email_err="Email ID is required";
  else
  {
     $email=input_data($_POST['email']);
     if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        $email_err="Invalid email format.";
  }
 if($_POST['address']=="")
     $address_err="Address is required";
  else
    {
      $address=input_data($_POST['address']);
      if(!preg_match("/^[0-9a-zA-Z__\s]*$/",$address))
       $address_err="only characters and numbers are allowed";
    }
  
  if($_POST['phone']=="")
     $mobile_err="Mobile number is required";
  else
  {
     $mobileno=input_data($_POST['phone']);
     if(!preg_match("/^[0-9]*$/",$mobileno))
        $mobile_err="Only numeric value is allowed.";
     if(strlen($phone)!=10)
        $mobile_err="Mobile number must contain 10 digits.";   
  }
  
  if($_POST['gender']=="")
     $gender_err="Gender is required";
  else
  {
     $gender=input_data($_POST['gender']);
  }
  
 
  if($_POST['password']=="")
    $password_err="password is required";
else
{
$password=input_data($_POST['password']);
if (!preg_match(" #.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
 $password_err="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
} 
}


if($_POST['password1']=="")
    $password1_err="password is required";
else
{
$password1=input_data($_POST['password1']);
if ($_POST["password"] !== $_POST["password1"])
$password1_err="password and retype password must be same";
}




 } 
function input_data($str)
 {
    $str=trim($str);
    $str=stripslashes($str);
    $str=htmlspecialchars($str);
    return $str;
 }
 
 
?>


   <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >  
      <div class="container">  
<img src="Images/Donater.jpeg" alt="Charity" width="900" height="400">
      <center>  <h1>----- Registration -----</h1> </center>  
      <hr>  
      <label> Firstname: </label>   
    <input type="text" name="firstname" placeholder= "Firstname" size="15" required /> <?php echo $name_err; ?>   <br>  
    <label> Middlename: </label>   
    <input type="text" name="middlename" placeholder="Middlename" size="15" required /> <?php echo $name1_err; ?>  <br>
    <label> Lastname: </label>    
    <input type="text" name="lastname" placeholder="Lastname" size="15"required />   <br><?php echo $name2_err; ?>
    <div>  
    <label>   
    
    Gender :  
    </label><br>  
    <input type="radio" value="Male" name="gender" > Male   
    <input type="radio" value="Female" name="gender" > Female   
    <input type="radio" value="Other" name="gender"> Other  
    <?php echo $gender_err; ?>  
    </div>  
    <label>   
    Phone :  
    </label>  
    <input type="text" name="phone" placeholder="phone no." size="10" required /> <?php echo $mobile_err; ?> <br>
 
    <label> Address : </label> 
    <input type="text" name="address" placeholder="address" size="10" onkeypress.width="this.style.width=((this.value.length+1)*8)+ 'px';" required /> <?php echo $address_err; ?>  <br>
      
    </textarea> <br>
     <label for="email"><b>Email:</b></label> 
     <input type="text" placeholder="Enter Email" name="email" required><?php echo $email_err; ?><br>
      
        <label for="password"><b>Password:</b></label>  
        <input type="password" placeholder="Enter Password" name="password"  required><?php echo $password_err; ?> <br>  
        <h4>  Note:Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one    special character.</h4>
        <label for="password1"><b>Re-type Password:</b></label>  
        <input type="password" placeholder="Retype Password" name="password1" required> <?php echo $password1_err; ?> <br> 
        <button type="submit" class="registerbtn" name="submit">Register</button>  <br><br>
	Want to login? <a href="login.php" > Login Here </a><br>

    </form> 



 <?php
if(isset($_POST['submit']))
{
   if($name_err=="" && $name1_err=="" && $name2_err=="" && $email_err=="" && $mobile_err=="" && $address_err=="" && $gender_err=="" && $password_err=="" && $password1_err=="")
   {
    $con=pg_connect("host=localhost dbname=typroject user=postgres password=postgres");

echo $con;
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];
//echo all values here  run on prompt
//echo "$firstname,$middlename,$lastname,$gender,$phone,$address,$email,$password,$password1";

$sp=pg_query("insert into donor (firstname,middlename,lastname,gender,phone,address,email,password,cpassword)
values('$firstname','$middlename','$lastname','$gender','$phone','$address','$email','$password','$password1')");

if($sp)
{ 
     echo '<script>alert("Your registration is successful.")</script>';
     echo '<script> location.replace("login.php") </script>';     
}
else 
    echo '<script>alert("You have already registered with us. Please login!!")</script>';
} 
   else
     echo "<h3><b>You didn't filled up the form correctly.</b></h3>";  
     
}
?>
    </body>  
    </html>  
