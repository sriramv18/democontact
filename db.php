<?php 

//require_once ('dbconfig.php');
$mysqli = new mysqli("localhost", "root", "", "democontact");


//$new = mysqli_query($mysqli,"SELECT * FROM sample");
//print_r ($results);
if(isset($_POST) & !empty($_POST)){
	
	$firstname = ($_POST['first_name']);
	$lastname = ($_POST['last_name']);
	$email = ($_POST['email']);
	$phone = ($_POST['phone']);
	$address = ($_POST['address']);
	$city = ($_POST['city']);
	$state = ($_POST['state']);
	$zip = ($_POST['zip']);

	
	
	
$CreateSql = "INSERT INTO `contactform`(`first_name`,`last_name`,`email`,`phone`,`address`,`city`,`state`,`zip`) VALUES ('$firstname','$lastname','$email','$phone','$address','$city','$state','$zip')";

$res = mysqli_query($mysqli, $CreateSql) or die(mysqli_error($mysqli));



}
						$first_name=$_REQUEST['first_name'];
                         $lastname=$_REQUEST['last_name'];
                         $email=$_REQUEST['email'];
						 $name = array($first_name,$lastname);
                         $headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
						 //$name = array($first_name,$lastname,$email,$phone,$address,$city,$state,$zip);
                       if (($first_name=="")||($lastname=="")||($email==""))
                         {
		                   echo "<h1>All fields are required, please fill the form again.</h1>";
	                     }
                       else{		
	                      $from="From: $first_name<$email>\r\nReturn-path: $email";
                          $subject="Message sent using your contact form";
		
	                     if(mail("sriramv63@gmail.com", $subject,$from,$first_name,$headers))
		                    {
			                  echo "<h2>Thank You For Contacting Us</h2>";
		                    }
		                 else
		                    {
		                    echo "Sending failed";
	                        }
                		  }
?>