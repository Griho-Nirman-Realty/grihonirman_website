<?php
// include("../../templates/db/db.php");

// $sendData = json_decode($_POST['sendData'], true);

// // Sanitize input data
// $name = mysqli_real_escape_string($con, $sendData['name']);
// $isd_code = mysqli_real_escape_string($con, $sendData['isd_code']);
// $phone = mysqli_real_escape_string($con, $sendData['phone']);
// $email = mysqli_real_escape_string($con, $sendData['email']);
// $category = mysqli_real_escape_string($con, $sendData['category']);
// $message = mysqli_real_escape_string($con, $sendData['message']);

// $execute = 1;
// if ($execute == 1) {
//     $email_text = $message;
    
//     require '../../backend_assets/mail_class/class.phpmailer.php';
    
//     $mail = new PHPMailer;
//     $mail->IsSMTP();
//     $mail->Host = 'grihonirmanrealty.in';    
//     $mail->Port = 465;
//     $mail->SMTPAuth = true;
//     $mail->Username = 'admin@grihonirmanrealty.in';
//     $mail->Password = 'admin@grihonirmanrealty';
//     $mail->SMTPSecure = 'tls';
//     $mail->From = 'admin@grihonirmanrealty.in';
//     $mail->FromName = $name;
//     $mail->AddAddress("admin@grihonirmanrealty.in", "Admin");
//     $mail->WordWrap = 50;
//     $mail->IsHTML(true);
//     $mail->Subject = "Quick Contact - " . $category;
//     $mail->Body = $email_text;
//     $mail->SMTPDebug = 3;

//     if ($mail->Send()) {
//         $quick_contact_code = "QCC_" . uniqid() . time();
        
//         // Insert into the database
//         $query = "INSERT INTO tbl_quick_contact (
//             `quick_contact_code`,
//             `name`, 
//             `isd_code`, 
//             `phone`, 
//             `email`, 
//             `category`, 
//             `message`, 
//             entry_user_code
//         ) VALUES (
//             '$quick_contact_code',
//             '$name',
//             '$isd_code',
//             '$phone',
//             '$email',
//             '$category',
//             '$message',
//             'user')";
        
//         if (mysqli_query($con, $query)) {
//             $status = "save";
//             $status_text = "We will get back to you soon. Thank you!";
//         } else {
//             $status = "error";
//             $status_text = "Database Error! Please try after some time.";
//         }
//     } else {
//         $status = "error";
//         $status_text = "Mail Error! Please try after some time.";
//     }
// } else {
//     $status = "error";
//     $status_text = "Something went wrong! Please try after some time.";
// }

// $response = [
//     'status' => $status,
//     'status_text' => $status_text,
// ];

// echo json_encode($response);


include("../../templates/db/db.php");

$sendData = json_decode($_POST['sendData'], true);

$newsletter_email = mysqli_real_escape_string($con, $sendData['newsletter_email']);
$customer_code = $session_user_code;

$execute = 1;

if ($execute==1) {
	$dataget = mysqli_query($con,"select * from newsletter where newsletter_email='".$newsletter_email."' ");
	$data = mysqli_fetch_row($dataget);
	if ($data) {
		$status = "Exist";
		$status_text = "This Email Already Exist !";
		$execute = 0;
	}
}

if ($execute==1) {
	$newsletter_code = "NLC_" . uniqid() . time();
	//========================= INSERT IN TABLE =======================
	mysqli_query($con, "INSERT INTO newsletter (
			newsletter_code,
			newsletter_email, 
			customer_code,
			entry_user_code
			) values(
			'" . $newsletter_code . "',
			'" . $newsletter_email . "',
			'" . $customer_code . "',
			'" . $session_user_code . "')");

	$status = "Save";
	$status_text = "Successfully Email Add To Newsletter";
}

$response = [
	'status' => $status,
	'status_text' => $status_text,
];
echo json_encode($response, true);




?>