<?php 

//require_once ('dbconfig.php');
$mysqli = new mysqli("localhost", "root", "", "democontact");






 // if(isset($_POST) & !empty($_POST)){
	
	 // $firstname = ($_POST['first_name']);
	 // $lastname = ($_POST['last_name']);
	 // $email = ($_POST['email']);
	 // $phone = ($_POST['phone']);
	 // $address = ($_POST['address']);
	 // $city = ($_POST['city']);
	 // $state = ($_POST['state']);
	 // $zip = ($_POST['zip']);
	 // $remarks = ($_POST['remarks']);

	
	
	
 // $CreateSql = "INSERT INTO `contactform`(`first_name`,`last_name`,`email`,`phone`,`address`,`city`,`state`,`zip`,`remarks`) VALUES ('$firstname','$lastname','$email','$phone','$address','$city','$state','$zip','$remarks')";

 // $res = mysqli_query($mysqli, $CreateSql) or die(mysqli_error($mysqli));



 // }

		$query = "select * from contactform ORDER by id desc LIMIT 1";
		$data = mysqli_query($mysqli,$query);
		
		while ($row = $data->fetch_assoc() ){
			extract($row);
			echo "<td>FirstName: ".$row{'first_name'}."</td>";
			echo "<br/>";
			echo "LastName: ".$row{'last_name'};
			echo "<br/>";
			echo "Email: ".$row{'email'};
			echo "<br/>";
			echo "Phone: ".$row{'phone'};
			echo "<br/>";
			echo "Address: ".$row{'address'};
			echo "<br/>";
			echo "State "  .$row{'State'};
			echo "<br/>";
			echo "ZIP " . $row{'zip'};
			echo "<br/>";
			echo "Remarks " . $row{'remarks'};
			echo "<br/>";
		}
						 $first_name=$_REQUEST['first_name'];
                         $lastname=$_REQUEST['last_name'];
                         $email=$_REQUEST['email'];
                         $phone=$_REQUEST['phone'];
                         $address=$_REQUEST['address'];
                         $state=$_REQUEST['state'];
                         $zip=$_REQUEST['zip'];
                         $remarks=$_REQUEST['remarks'];
                         $file=$_REQUEST['file'];
						 $message = ('FirstName -.$first_name.<br/>,LastName -.$lastname.<br/>,Email -.$email.<br/>,Phone -.$phone.<br/>,Address -.$address.<br/>,State -.$state.<br/>,ZIP.$zip.<br/>');
                         $headers = "From: sriramv63@gmail.com" . "\r\n" ; "CC: $email"."\r\n";
						//$name = array($first_name,$lastname,$email,$phone,$address,$city,$state,$zip);
                        if (($first_name=="")||($lastname=="")||($email=="")||($phone=="")||($address=="")||($state=="")||($zip=="")||($remarks==""))
                        {
		               echo "<h1>All fields are required, please fill the form again.</h1>";
	                    }
                        else{		
	                     $from="From: $first_name<$email>\r\nReturn-path: $email";
                         $message = "FirstName - $first_name $lastname<br/> EMAIL- $email<br/>PHONE- $phone <br/> Address- $address<br/> State- $state <br/>ZIP- $zip<br/>Remarks- $remarks <br/> $file";
						 $headers = "MIME-Version: 1.0" . "\r\n";
						 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						 $headers .= "From: sriramv63@gmail.com" . "\r\n" ; 
						 $headers .="CC: $email". "\r\n";
						 $headers .="BCC: sriramv0719@gmail.com";
						 //$headers .="BCC: sriramv0719@gmail.com";
						 $subject="Message sent using your contact form";
		
	                     if(mail("sriramv63@gmail.com", $subject,$message,$headers))
		                   {
			                 echo "<h2>Thank You For Contacting Us</h2>";
		                     }
		                  else
		                    {
		                    echo "Sending failed";
	                        }
                		   }
?>
