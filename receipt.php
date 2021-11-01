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
		  <li><a href="logout.html">Log Out</a></li> 
  </ul>
</div>

<div id="printableArea">
  

 <h1><Center> Donation Receipt </center> </h1>
<?php

echo "Name:".$_SESSION["cardname"];
echo "<br><br>";
echo "amount:".$_SESSION["amount"];
echo "<br><br>";
echo "THANK YOU FOR DONATION";
?>

<?php
echo "<br><br>";
echo "Dear   ".$_SESSION["cardname"]; echo ",";
echo "<br><br>";
//echo "Amount is".$_SESSION["amount"];
echo <<<EOT
Together we are making a difference! Your continued support of our mission is deeply gratifying to us, and we hope it is the same for you. We were honored to see that you have chosen to increase your donation this month. Your donation has already started to impact on helpneedy life .
<br><br>

Please feel free to contact 'Give a little foundation', 7020246983 if you have any specific questions, we would love the opportunity to thank you again!<br><br>

With deepest gratitude, and warmest wishes, <br><br>

Sincerely,<br><br>

Give a little foundation
EOT;

?>
</div>
<input type="button" onclick="printDiv('printableArea')" value="Print" />
<script>
function printDiv(printableArea)
{
   var printContents = document.getElementById(printableArea).innerHTML;
   var originalContents = document.body.innerHTML;
   document.body.innerHTML=printContents;
     window.print();
   document.body.innerHTML = originalContents;
}

</script>
</html>
</body>

