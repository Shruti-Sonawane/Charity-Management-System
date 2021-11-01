<!DOCTYPE html>  
    <html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style>  
    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: #808080;
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
  color: green;
  background-color: white;
  text-decoration: underline;
}

    </style>  
    </head>  
</div>
    </section>
    <body> 


<div id="doc" class="yui-t7">
  <div id="hd">
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



 
  <div id="wrapper">
   

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">



            <img src="Images/helpneedy.jpeg" alt="helpneedy" width="900" height="350">



          
           
        <hr>


<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$HelpNeedyCategory=$_POST['HelpNeedyCategory'];
$email=$_POST['email'];
$city=$_POST['city'];
$password=$_POST['password'];
$password1=$_POST['password1'];




$name_err=$email_err=$address_err=$city_err=$phone_err=$password_err=$password1_err=$HelpNeedyCategory_err="";
$name=$email=$phone=$address=$city=$password=$password1=$HelpNeedyCategory="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if($_POST['name']=="")
     $name_err="Name is required";
  else
  {
     $name=input_data($_POST['name']);
     if(!preg_match("/^[a-zA-Z_\s]*$/",$name))
        $name_err="Only alphabets and white space are allowed.";
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

if($_POST['city']=="")
     $city_err="city name is required";
  else
  {
     $city=input_data($_POST['city']);
     if(!preg_match("/^[a-zA-Z_]*$/",$city))
        $city_err="Only alphabets and white space are allowed.";
  }

  
  if($_POST['phone']=="")
     $phone_err="Mobile number is required";
  else
  {
     $phone=input_data($_POST['phone']);
     if(!preg_match("/^[0-9]*$/",$phone))
        $phone_err="Only numeric value is allowed.";
     if(strlen($phone)!=10)
        $phone_err="Mobile number must contain 10 digits.";   
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




 if($_POST['HelpNeedyCategory']=="")
     $HelpNeedyCategory_err="HelpNeddy Category is required";
  else
  {
     $HelpNeedyCategory=input_data($_POST['HelpNeedyCategory']);
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


        <!--FORM-->
        <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >  
        <Center> <h3>----- Help Needy REGISTRATION -----  </h3> </Center>
           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name"> Name*</label>
              <input type="text" class="form-control" name="name" placeholder="Name" required> <?php echo $name_err; ?>
            </div>
      
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email*</label>
              <input type="email" class="form-control" name="email" placeholder="email@example.com" required><?php echo $email_err; ?>
            </div>
            
            
            <div class="form-group col-md-6">
              <label for="inputAddress">Address*</label>
              <input type="text" class="form-control" name="address" placeholder="1234 Main St" required><?php echo $address_err; ?> 
            </div>
            

            <div class="form-group col-md-6">
              <label for="inputCity">City*</label>
              <input type="text" class="form-control" name="city" required><?php echo $city_err; ?> 
            </div>
            <div class="form-group col-md-4">
              <label for="Help Needy Category">Help Needy Category*</label>
              <select name="HelpNeedyCategory" class="form-control" required> <?php echo $HelpNeedyCategory_err;?>
                <option value="" selected disabled>Please select</option>
                <option>Personal Help</option>
                <option>NGO</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="CN">Contact Number*</label>
               <input type="text" name="phone" placeholder="phone no." size="10" required /><?php echo $phone_err;?> <br>
 
            </div>
             <div class="form-group col-md-6">
             <label for="password"><b>Password:</b></label>  
        <input type="password" placeholder="Enter Password" name="password"  required><?php echo $password_err; ?><br>  
        <h4>  Note:Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one    special character.</h4>
            </div>
            <div class="form-group col-md-6">
             <label for="password1"><b>Re-type Password:</b></label>  
        <input type="password" placeholder="Retype Password" name="password1" required> <?php echo $password1_err; ?> <br> 
             </div>
            <div class="form-group col-md-6">
            </div>

        <button type="submit" class="registerbtn" name="submit">Register</button>  <br><br>
              
		

            </div>
          </div>

        </form>


<?php
if(isset($_POST['submit']))
{
   if($name_err=="" && $email_err=="" && $address_err=="" && $city_err=="" && $HelpNeedyCategory_err=="" && $phone_err=="" && $password_err=="" && $password1_err=="")
   {
    $con=pg_connect("host=localhost dbname=typroject user=postgres password=postgres");

echo $con;
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$HelpNeedyCategory=$_POST['HelpNeedyCategory'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$password1=$_POST['password1'];
//echo all values here  run on prompt
echo "$name,$email,$address,$city,$HelpNeedyCategory,$phone,$password,$password1";

$nn=pg_query("insert into helpneedy(name,email,address,city,helpneedycategory,contactno,password,cpassword)
values('$name','$email','$address','$city','$HelpNeedyCategory','$phone','$password','$password1')");



if($nn)
{ 
     echo '<script>alert("Your registration is successful.We will contact you soon.")</script>';
     echo '<script> location.replace("login2.php") </script>';     
}
else 
    echo '<script>alert("You have already registered with us. please login!!")</script>';
} 
   else
     echo "<h3><b>You didn't filled up the form correctly.</b></h3>";  
     
}
?>

</body>

</html>
