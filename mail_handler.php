<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='vyasraj.vaidya.25@gmail.com'; // Receiver Email ID
		$subject='Form Submission';
		$message="Name :".$name."\n\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you for your email. "." I will contact you as soon as possible!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
