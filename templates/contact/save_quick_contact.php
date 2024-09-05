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

$name = mysqli_real_escape_string($con, $sendData['name1']);
$isd_code = mysqli_real_escape_string($con, $sendData['isd_code1']);
$phone = mysqli_real_escape_string($con, $sendData['phone1']);
$email = mysqli_real_escape_string($con, $sendData['email1']);
$category = mysqli_real_escape_string($con, $sendData['category1']);
$message = mysqli_real_escape_string($con, $sendData['message1']);

$execute = 1;


if ($execute == 1) {

	// the message
	$subject = $category;
	$body = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <p>Dear $name,</p>
        <p>Thank you for reaching out to us. Here is a summary of the information you provided:</p>
        <ul>
            <li><strong>ISD Code:</strong> $isd_code</li>
            <li><strong>Phone Number:</strong> $phone</li>
            <li><strong>Email:</strong> $email</li>
            <li><strong>Category:</strong> $category</li>
            <li><strong>Message:</strong> $message</li>
        </ul>
        <p>We will get back to you as soon as possible.</p>
        <p>Best regards,<br>Griho Nirman Realty Pvt.Ltd.</p>
    </body>
    </html>
";

	// Set the headers for the email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:Griho Nirman Realty Pvt. Ltd. <contact@grihonirmanrealty.in>" . "\r\n";
	$headers .= "CC: sourav1grihonirman@gmail.com, admin@grihonirmanrealty.in" . "\r\n";
	$msg = wordwrap($message, 70);
	mail($email, $subject, $body, $headers);
	$quick_contact_code = "QCC_" . uniqid() . time();
	//========================= INSERT IN TABLE =======================
	mysqli_query($con, "INSERT INTO tbl_quick_contact (
			`quick_contact_code`,
			`name`, 
			`isd_code`, 
			`phone`, 
			`email`, 
			`category`, 
			`message`, 
			`entry_timestamp`, 
			entry_user_code
			) values(
			'" . $quick_contact_code . "',
			'" . $name . "',
			'" . $isd_code . "',
			'" . $phone . "',
			'" . $email . "',
			'" . $category . "',
			'" . $message . "',
			'" . $timestamp . "',
			'user-contact')");

	$status = "save";
	$status_text = "We will get back to you soon. Thank you!";
} else {
	$status = "error";
	$status_text = "Something went wrong! Please try after some times.";
}

$response = [
	'status' => $status,
	'status_text' => $status_text,
];
echo json_encode($response, true);
