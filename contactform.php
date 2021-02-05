<?php

//The if statement will check if any values have been entered because if there has been no value entered then the function will return as null and will not work.
if (isset($_POST['submit'])) {
	
//The variables correspond with the form on the contact.php page. The $name will be the name of the sender, $MailFrom will have the sender write in their email address, $subject will reuqire sender to write in a subject to show what the email will be about and $message will be the information that the sender wants to talk about with the receiver.
	$name = $_POST['name'];	
	$mailFROM = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
//The mailTO will automatiically send the data that has been recored from  the contact form and send it to this email url/address.
	$mailTO = "glvdqdcp@glvdstone.com";
	
//When email is received the $header variable will show the email address of the sender. 
	$headers = "From: ".$mailFROM;
	
//This variable will show a custom message sent from the sender which will show the sender's name and then the message. The ".\n" represents a new line so that the name and message are not bunched together and can be read clearly. 
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
//This is the mail function that contains at least 3 to 4 parameters that will allow senders to send an email to the reciever. The mailTO allows the sender to compase an email and send it to the receiver's email address, the sender can also write a subject input to the receiver and with the $txt and $header variables the receiver can see who has sent the email via name and sender email address with a custom message followed also. 
	mail($mailTO, $subject, $txt, $headers);
	
//This shows if the email has been sent to the receiver.
	header("Location: contact.php?mailsent");
}