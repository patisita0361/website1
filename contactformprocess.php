<?php
$webMaster = 'patricia036_1@hotmail.com';
$subject = 'tutorial request';

$email =$_POST['email'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$phone =$_POST['phone'];
$message =$_POST['message'];

$message = <<<EMAIL

Email: $email
First Name: $fname
Last Name: $lname
Phone Number: $phone
Message: $message
EMAIL;



	mail ($webMaster, $subject, $message);
	
	$theResults = <<<EOD
<!doctype html>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Y and P New York</title>

<link rel="stylesheet" type="text/css" href="/css/ms.css" media="screen" />
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<header>
<div id="banner">
	<a href="index.html"><img src="images/Drawing(5).png" alt="logo1" styleClass="logo" /></a>
	             	                 
	<div id="navigation">
	<ul>
    	<li><a href="index.html"><strong>HOME</strong></a></li>
        <li><a href="info.html"><strong>INFO</strong></a></li>
        <li><a href="services.html"><strong>SERVICES </strong></a></li>
        <li ><a href="custom_made.html"><strong>CUSTOM MADE</strong></a></li>
        <li ><a href="contact_us.html"><strong>CONTACT US</strong></a></li>
    </ul>
	</div>
	          
</div>

</header>
<section><!-- InstanceBeginEditable name="Container" -->

<p>Thank you! We received your email</p>



<!-- InstanceEndEditable --></section>
<footer>
<div id="footer">	
    
     	<div id="l_footer">
    	 <h4>OPENING HOURS</h4>
    	 <p>Mon-Fri 9 AM - 6PM</p>
    	 <p>Sat 9 AM - 3 PM</p>
    	</div>
    	
    	<div id="c_footer">
		<h4>GET IN TOUCH</h4>    
    	<p>58 East 53st</p>
    	<p>New York, NY 10022</p>
    	<p>Phone: (212) 504-9234</p>
    	<p>e-mail:yandpnewyork@hotmail.com</p>
    	</div>
   
    	<div id="r_footer">
		<h4>QUICK LINKS</h4>
    	<ul>
        	<li><a href="#"><strong>Home</strong></a></li>
        	<li><a href="#"><strong>Info</strong></a></li>
        	<li><a href="#"><strong>Services</strong></a></li>
        	<li ><a href="#"><strong>Custom Made</strong></a></li>
        	<li ><a href="contact_us.html"><strong>Contact Us</strong></a></li>
       </ul>
       <h4>FOLLOW US</h4>
       
       		<div id="socialMedia">
       		<ul>      
       		<li><a href="#"><img src="/images/facebook-icon.png" alt="facebook" styleClass="socialMedia"/></a></li>
       		<li><a href="#"><img src="/images/google-plus-icon.png" alt="google" styleClass="socialMedia"/></a></li>
       		<li><a href="#"><img src="/images/pinterest-icon.png" alt="pinterest" styleClass="socialMedia"/></a></li>
 	      	<li><a href="#"><img src="/images/Twitter_alt.png" alt="twitter" styleClass="socialMedia"/></a></li>
      		</ul>
       		</div>
       
      	</div>
    
    <div id="b_footer">
    	<p>(c) Copyright 2016 by Y_P Store.</p>
    </div>
   
</div>
</footer>
</body>
<!-- InstanceEnd --></html>
EOD;

echo "$theResults";	

?>