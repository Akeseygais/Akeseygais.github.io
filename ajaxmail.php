<?php
$un=$_POST['username'];
$em=$_POST['useremail'];
$su=$_POST['usersub'];
$msg=$_POST['mesg'];
//$phone=$_POST['userphone'];
if(trim($un)!="" && trim($msg)!="" && trim($su)!="" && trim($em)!=""){
		if(filter_var($em, FILTER_VALIDATE_EMAIL)){
			//if(preg_match("/^[0-9]*$/", $phone) && strlen($phone)>6) { 
				$message="Hi Admin..<p>".$un." has sent a query having subject ".$su." and email id as ".$em."</p><p>Query is : ".$msg."</p>";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
				$headers .= 'From: <support@acupunctureclinic.com>' . "\r\n";

				if(mail('support@templatebundle.net','Query for Acupuncture Clinic',$message,$headers )){
					echo '1#<p style="color:green;">Mail has been sent successfully.</p>';
				}else{
					echo '2#<p style="color:red;">Please, Try Again.</p>';
				}
			//}
			// else{
				// echo '2#<p style="color:red">Please, provide valid Phone no </p>';
			// }
		}else{
			echo '2#<p style="color:red">Please, provide valid Email.</p>';
		}
}else{
	echo '2#<p style="color:red">Please, fill all the details.</p>';
}?>