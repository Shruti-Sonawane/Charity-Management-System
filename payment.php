<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<style>
body {
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
    .icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
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
    <center><div id="header" ><h2 style="color:white">WELCOME  TO  GIVE  A  LITTLE  FOUNDATION  </h2></div></center>

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
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];



$cardname_err=$cardnumber_err=$expmonth_err=$expyear_err=$cvv_err=$amount_err=$bankname_err="";
$cardname=$cardnumber=$expmonth=$expyear=$cvv=$amount=$bankname="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if($_POST['amount']==" ")
     $amount_err="card number is required";
  else
  {
     $amount=input_data($_POST['amount']);
     if(!preg_match("/^[0-9]*$/",$amount))
        $cardnumber_err="Only numeric value   is allowed.";
        
  }


  if($_POST['cardname']==" ")
     $cardname_err="cardname is required";
  else
  {
     $cardname=input_data($_POST['cardname']);
     if(!preg_match("/^[a-zA-Z_\s]*$/",$cardname))
        $cardname_err="Only alphabets and white space are allowed.";
  }
  
  if($_POST['cardnumber']==" ")
     $cardnumber_err="card number is required";
  else
  {
     $cardnumber=input_data($_POST['cardnumber']);
     if(!preg_match("/^[0-9]*$/",$cardnumber))
        $cardnumber_err="Only numeric value  and whitespace is allowed.";
     if(strlen($cardnumber)!=16)
        $cardnumber_err="card number must contain 16 digits.";   
  }


  if($_POST['expmonth']==" ")
     $expmonth_err="expairy month is required";
  else
  {
     /*$expmonth=input_data($_POST['expmonth']);
     if(!preg_match("/^[a-zA-Z]*$/",$expmonth))
        $expmonth_err="Only alphabets and white space are allowed.";*/
      $expmonth=input_data($_POST['expmonth']);
     if(!preg_match("/^[0-9]*$/",$expmonth))
        $expmonth_err="Only numeric value is allowed.";
     if($expmonth>0 && $expmonth<13)
      {
         
        echo"";
      }
     else
       $expmonth_err="Invalid month";
          
      
     
  }
 
 
if($_POST['expyear']==" ")
     $expyear_err="expairy year is required";
  else
  {
     $expyear=input_data($_POST['expyear']);
     if(!preg_match("/^[0-9]*$/",$expyear))
        $expyear_err="Only numeric value is allowed.";
     if(strlen($expyear)!=4)
        $expyear_err="expairy year must contain 4 digits."; 
    if($expyear>=2021 && $expyear<=2040)
     {
        if($expyear==2021)
        {
          $expmonth=input_data($_POST['expmonth']);
          if($expmonth>5 && $expmonth<13)
           {   echo ""; }
          else
           $expyear_err="Your card is expair";
         
         }
       
           
    }
     else
      $expyear_err="your card is expire";  
      
   
  }
  
 
if($_POST['cvv']==" ")
     $cvv_err="cvv number is required";
  else
  {
     $cvv=input_data($_POST['cvv']);
     if(!preg_match("/^[0-9]*$/",$cvv))
        $cvv_err="Only numeric value is allowed.";
     if(strlen($cvv)!=3)
        $cvv_err="cvv number must contain 3 digits.";   
  }
  
 if($_POST['bankname']=="")
     $bankname_err="Bank name is required";
  else
  {
     $bankname=input_data($_POST['bankname']);
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
      
		<div class="container">  
		<center> <h1>-----Payment-----</h1></center>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
              <label for="amount">Amount</label>
            <input type="text"  name="amount" placeholder="1000">
		<span class="error"> <?php echo $amount_err;?></span><br>

               <label for="bankname">Bank Name</label>
              <select name="bankname" class="form-control" required> <?php echo $bankname_err;?>
                <option value="" selected disabled>Please select</option>
                <option>Axis Bank</option>
                <option>HDFC Bank</option>
                <option>ICICI Bank</option>
                <option>State Bank of India</option>
              </select>
                
             <br>
            <label for="cardname">Name on Card</label>
            <input type="text"  name="cardname" placeholder="John More Doe">
		<span class="error"> <?php echo $cardname_err;?></span><br>
            <label for="cardnumber">Credit card number</label>
            <input type="text"  name="cardnumber" placeholder="1111222233334444"><?php echo $cardnumber_err; ?><br>
            <label for="expmonth">Exp Month</label>
            <input type="text" name="expmonth" placeholder="02"><?php echo $expmonth_err; ?> <br>
            <label for="expyear">Exp Year</label>
            <input type="text"  name="expyear" placeholder="2018"><?php echo $expyear_err; ?><br>
            <label for="cvv">CVV</label>
                <input type="text" name="cvv" placeholder="352"><?php echo $cvv_err; ?></br>
              <button type="submit" class="registerbtn" name="submit">Checkout</button>  <br><br>
            
 <!--<button type="submit" class="registerbtn" name="submit" value="Continue to checkout">Continue to checkout</button> -->
    </div> 
      </form>
<?php
if(isset($_POST['submit']))
{
   if($cardname_err==""&& $amount_err=="" && $bankname_err=="" && $cardnumber_err=="" && $expmonth_err=="" &&$expyear_err=="" && $cvv_err=="" )
   {  
       $con=pg_connect("host=localhost dbname=typroject  user=postgres password=postgres");

echo $con;
$amount=$_POST['amount'];
$bankname=$_POST['bankname'];
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];

echo "$amount,$bankname,$cardname,$cardnumber,$expmonth,$expyear,$cvv";

$ss=pg_query("insert into  payment(amount,bankname,cardname,cardnumber,expmonth,expyear,cvv)
values('$amount','$bankname','$cardname','$cardnumber','$expmonth','$expyear','$cvv')");
if($ss)
 
   { 
     echo '<script>alert("Your payment is successful.")</script>';
     echo '<script> location.replace("receipt.php") </script>'; 

      $_SESSION["amount"]=$amount;
       $_SESSION["cardname"]=$cardname;
     
   }
   else
      echo '<script>alert("Record not inserted.")</script>';
}
   else
     echo "<h3><b>You didn't filled up the form correctly.</b></h3>";  
     
}

?>

</body>
</html>
