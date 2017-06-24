<?php 
	
	$name_error = $email_error = $subject_error = $description_error = "";
	$name = $email = $subject = $description = $success = "";


	function security_check($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["name"])) 
		{
			$name_error = "Name is required";
		} 
		else 
		{
			$name = security_check($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
			{
      			$name_error = "Only letters and white space allowed"; 
      		}
		}


		if (empty($_POST["email"])) 
		{
			$email_error = "Email is required";
		} 
		else 
		{
			$email = security_check($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
      			$email_error = "Invalid email format"; 
      		}
		}

		if (empty($_POST["subject"])) 
		{
			$subject_error = "Subject is required";
		} 
		else 
		{
			$subject = security_check($_POST["subject"]);
		}


		if (empty($_POST["description"])) 
		{
			$description_error = "Description is required";
		} 
		else 
		{
			$description = security_check($_POST["description"]);
		}


		if($name_error == "" && $email_error == "" && $subject_error == "" && $description_error == "")
		{
			$formcontent = "From: $name \n Message: $description";
			$recipient = "nmanivan@umich.edu";
			$subject = "$subject";
			$mailheader = "From: $email \r\n";
			if (mail($recipient, $subject, $formcontent, $mailheader))
			{
				$success = "Message sent.  Thank you for contacting us!";
			}
		}
	}

?>








