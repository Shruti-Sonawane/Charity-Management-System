<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FFFF00;}
  body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: #808080;
     margin:auto;
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
		  <li><a href="logout.html">Log Out</a></li> 
  </ul>
</div>

<div id="wrapper">
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="Images/img1.jpg" alt="Charity" width="900" height="350">

           <Center> <h1 class="text-divider"><span>Volunteer</span></h1> </Center>

            <br>
            <h3 class="takeleft">
              BECOME A VOLUNTEER
            </h3>
            <p>Volunteering can make a real difference to your own life and the lives of those around you. There are
              loads of ways to get involved and plenty of organisations that can help you find your dream role.</p>

            <h3 class="takeleft">
              OUR SERVICES
            </h3>
            <p>
              <li>Raise suitable causes and social organizations with your objectives.</li>
              <li>Site visits to the social organizations and the feasibility of the event.</li>
              <li>Handle logistics management; food, transport, and materials needed.</li>
              <li>Managing volunteers.</li>
            </p>
          </div>
        </div>
        <br>






<?php
// define variables and set to empty values
$nameErr = $emailErr  = $ContactNumberErr = $genderErr = $howHelpErr  = $offencesErr = $medicErr ="";
$name = $email = $ContactNumber  = $gender = $howHelp  = $offences = $medic ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

 /* if (empty($_POST["City"])) {
    $CityErr = "City is required";
  } else {
    $City = test_input($_POST["City"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$City)) {
      $CityErr = "Only letters and white space allowed";
    }
  }*/
  
  /*if (empty($_POST["State"])) {
    $StateErr = "State is required";
  } else {
    $State = test_input($_POST["State"]);
  }*/


   if (empty($_POST["ContactNumber"])) {
    $ContactNumberErr = "Contact Number is required";
  } else {
    $ContactNumber = test_input($_POST["ContactNumber"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$ContactNumber)) {
      $ContactNumberErr = "Only numeric value is allowed";
     if(strlen($ContactNumber)!=10)
        $ContactNumberErr="Mobile number must contain 10 digits."; 
    }
  }


  /*if (empty($_POST["skills"])) {
    $skillsErr = "This is required";
  } else {
    $skills = test_input($_POST["skills"]);
  }*/

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["howHelp"])) {
    $genderErr = "Please choose one of these.";
  } else {
    $gender = test_input($_POST["howHelp"]);
  }
  
  if (empty($_POST["offences"])) {
    $offencesErr = "This is required";
  } else {
    $offences = test_input($_POST["offences"]);
  }

  if (empty($_POST["medic"])) {
    $medicErr = "This is required";
  } else {
    $medic = test_input($_POST["medic"]);
  }

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

 <Center> <h3>----- VOLUNTEER REGISTRATION -----  </h3> </Center>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name*: <input type="text" name="name" placeholder="Alex Arnold Denzel" required>
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail*: <input type="text" name="email" placeholder="email@example.com" required >
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Occupation: <input type="text" name="Occupation" placeholder="eg.Businessman" >
  <br><br>
  Address: <input type="text" name="Address" placeholder="Apartment, studio, or floor" >
  <br><br>
  City*: <input type="text" name="City" required>
  <span class="error"><?php echo $CityErr;?></span>
  <br><br>
  
  Contact Number*: <input type="text" name="ContactNumber" required>
  <span class="error"><?php echo $ContactNumberErr;?></span>
  <br><br>
 
 
  Gender*:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="other">0ther
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>

  
  <h2>How can you help*:</h2>
  <input type="radio" name="howHelp" value="I would like to volunteer my time">I would like to volunteer my time<br>
  <input type="radio" name="howHelp" value="I would like to contribute financially">I would like to contribute financially<br>
  <input type="radio" name="howHelp" value="both">both<br>
  <span class="error"> <?php echo $howHelpErr;?></span>
  <br><br>


   <h2>Declaration</h2>
   <p>Recognising that I am volunteering at an NGO that is involved with fund-raising and is a child-focused
                organisation, I hereby declare that following answeres as true:</p>

   <h5>Have you been convicted of any criminal offences? (Required)</h5>
  <input type="radio" name="offences" value="yes">yes
  <input type="radio" name="offences" value="no">no
  <span class="error"> <?php echo $offencesErr;?></span>
  <br><br>


   <h5>Do you suffer from any ongoing medical condition(s) that may prevent you from carrying out your duty? (Required)</h5>
  <input type="radio" name="medic" value="yes">yes
  <input type="radio" name="medic" value="no">no
  <span class="error"> <?php echo $medicErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">  
   <br><br>

</form>
<?php
if(isset($_POST['submit']))
{
   if($nameErr =" " && $emailErr =" "   && $ContactNumberErr =" "  && $genderErr =" " && $howHelpErr  =" " && $offencesErr =" " && $medicErr = " ")
{
  $con=pg_connect("host=localhost dbname=typroject user=postgres password=postgres");

echo $con;
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['Address'];
$ContactNumber=$_POST['ContactNumber'];
$gender=$_POST['gender'];
$howHelp=$_POST['howHelp'];
$offences=$_POST['offences'];
$medic=$_POST['medic']; 
$Occupation=$_POST['Occupation']; 
$City=$_POST['City'];
echo "$name,$email,$Occupation,$address,$City,$ContactNumber,$gender,$howHelp,$offences,$medic";

$jj=pg_query("insert into  volunteer (name,email,occuption,address,city ,conatactno, gender,hcyh,offences,medical)
values('$name','$email','$Occupation','$address','$City','$ContactNumber','$gender','$howHelp','$offences','$medic')");
if($jj)
{ 
     echo '<script>alert("You have registered with us. Our team will contact you soon!!.")</script>';
     //echo '<script> location.replace("login.php") </script>';     
}
else 
    echo '<script>alert("Record not inserted.")</script>';
} 
   else
     echo "<h3><b>You didn't filled up the form correctly.</b></h3>";  
     
   
}
?>

</div>
</section>
 </div>
</body>
</html>
