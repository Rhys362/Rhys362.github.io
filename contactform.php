<?php

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$menuOption = $_POST['menu'];
	$guests = $_POST['guests'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo = "rhysramsay19@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received a new quote request from ".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: quoteForm.html?mailsend");
	
}