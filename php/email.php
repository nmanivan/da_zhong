<?php 
	
	$submit_confirmed = "";

	$name_error_contact = $email_error_contact = $subject_error_contact = $description_error_contact = "";

	$name_error_delivery = $email_error_delivery = $phone_number_error_delivery = $address_error_delivery = $description_error_delivery = "";

	$name = $email = $phone_number = $address = $subject = $description = $success = "";


	function security_check($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_POST['contact_submit'])
	{
		$submit_confirmed = "contact submit confirmed";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if (empty($_POST["name"])) 
			{
				$name_error_contact = "Name is required";
			} 
			else 
			{
				$name = security_check($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
				{
	      			$name_error_contact = "Only letters and white space allowed"; 
	      		}
			}


			if (empty($_POST["email"])) 
			{
				$email_error_contact = "Email is required";
			} 
			else 
			{
				$email = security_check($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
	      			$email_error_contact = "Invalid email format"; 
	      		}
			}

			if (empty($_POST["subject"])) 
			{
				$subject_error_contact = "Subject is required";
			} 
			else 
			{
				$subject = security_check($_POST["subject"]);
			}


			if (empty($_POST["description"])) 
			{
				$description_error_contact = "Description is required";
			} 
			else 
			{
				$description = security_check($_POST["description"]);
			}


			if($name_error_contact == "" && $email_error_contact == "" && $subject_error_contact == "" && $description_error_contact == "")
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
	}

	else if($_POST['delivery_submit'])
	{
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$submit_confirmed = "delivery submit confirmed";

			if (empty($_POST["name"])) 
			{
				$name_error_delivery = "Name is required";
			} 
			else 
			{
				$name = security_check($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
				{
	      			$name_error_delivery = "Only letters and white space allowed"; 
	      		}
			}


			if (empty($_POST["email"])) 
			{
				$email_error_delivery = "Email is required";
			} 
			else 
			{
				$email = security_check($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
	      			$email_error_delivery = "Invalid email format"; 
	      		}
			}

			if (empty($_POST["phone_number"])) 
			{
				$phone_number_error_delivery = "Phone number is required";
			} 
			else 
			{
				$phone_number = security_check($_POST["phone_number"]);
				if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone_number)) 
				{
					$phone_number_error_delivery = "Use '###-###-####'";
				}
			}


			if (empty($_POST["address"])) 
			{
				$address_error_delivery = "Address is required";
			} 
			else 
			{
				$address = security_check($_POST["address"]);
			}


			if (empty($_POST["description"])) 
			{
				$description_error_delivery = "Description is required";
			} 

			else 
			{
				$description = security_check($_POST["description"]);
			}


			if($name_error_delivery == "" && $email_error_delivery == "" && $phone_number_error_delivery == "" && $address_error_delivery == "" && $description_error == "")
			{
				$formcontent = "From: $name \nPhone number: $phone_number \nAddress: $address \nMessage: $description";
				$recipient = "nmanivan@umich.edu";
				$subject = "$subject";
				$mailheader = "From: $email \r\n";
				if (mail($recipient, $subject, $formcontent, $mailheader))
				{
					$success = "Message sent.  Thank you for contacting us!";
				}
			}
		}
	}

?>








