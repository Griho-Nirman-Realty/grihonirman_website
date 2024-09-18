<?php
include("../../templates/db/db.php");

$sendData = json_decode($_POST['sendData'], true);

$newsletter_email = mysqli_real_escape_string($con, $sendData['newsletter_email']);

$execute = 1;

if ($execute == 1) {
	$dataget = mysqli_query($con, "select * from tbl_news_letter where newsletter_email='" . $newsletter_email . "' ");
	$data = mysqli_fetch_row($dataget);
	if ($data) {
		$status = "Exist";
		$status_text = "Thank you! Your email is already in our system.";
		$execute = 0;
	}
}

if ($execute == 1) {
	$subject = "Newsletter Subscription";
	$body = "
    <html>
		<head>
			<title><?= $subject; ?></title>
			<style>
				body {
					font-family: 'Poppins', sans-serif;
					background-color: #f2f2f2;
					margin: 0;
					padding: 0;
				}
				.container {
					max-width: 650px;
					background-color: #ffffff;
					margin: 50px auto;
					border-radius: 10px;
					box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
					overflow: hidden;
					font-size: 16px;
					color: #333333;
				}
				.header {
					background-color: #1abc9c;
					color: #ffffff;
					padding: 30px 20px;
					text-align: center;
					border-bottom: 5px solid #16a085;
				}
				.header h1 {
					margin: 0;
					font-size: 32px;
					font-weight: 600;
				}
				.header p {
					margin-top: 5px;
					font-size: 18px;
				}
				.content {
					padding: 40px 30px;
					line-height: 1.7;
				}
				.content p {
					margin: 20px 0;
					font-size: 17px;
				}
				.highlight {
					color: #1abc9c;
					font-weight: bold;
				}
				.cta {
					text-align: center;
					margin: 40px 0;
				}
				.cta a {
					background-color: #1abc9c;
					color: #ffffff;
					padding: 15px 30px;
					text-decoration: none;
					border-radius: 50px;
					font-size: 18px;
					font-weight: 500;
					transition: background-color 0.3s ease;
					box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
				}
				.cta a:hover {
					background-color: #16a085;
				}
				.divider {
					height: 1px;
					background-color: #e0e0e0;
					margin: 30px 0;
				}
				.footer {
					background-color: #f8f9fa;
					padding: 20px 30px;
					text-align: center;
					font-size: 14px;
					color: #7f8c8d;
				}
				.footer p {
					margin: 10px 0;
				}
				.footer a {
					color: #1abc9c;
					text-decoration: none;
				}
				.footer a:hover {
					text-decoration: underline;
				}
			</style>
		</head>
	<body>
		<div class='container'>
			<div class='header'>
				<h1>Welcome to Griho Nirman Realty</h1>
				<p>Your trusted real estate partner</p>
			</div>
			<div class='content'>
				<p>Dear <span class='highlight'>Subscriber</span>,</p>
				<p>We are thrilled to welcome you to the Griho Nirman Realty family! By subscribing to our newsletter, you're now part of an exclusive group that receives the latest updates, special offers, and insider insights on the real estate market.</p>
				<div class='cta'>
					<a href='https://grihonirmanrealty.in/portfolio'>Explore Our Latest Projects</a>
				</div>
				<p>Thank you for choosing us. We look forward to keeping you informed and engaged with everything we have to offer.</p>
				<div class='divider'></div>
				<p>Best regards,<br><strong>Griho Nirman Realty Pvt. Ltd.</strong></p>
			</div>
			<div class='footer'>
				<p>&copy; <?= date('Y'); ?> Griho Nirman Realty Pvt. Ltd. All rights reserved.</p>
				<p><a href='https://grihonirmanrealty.in/contact'>Unsubscribe</a> | <a href='https://grihonirmanrealty.in/about'>Privacy Policy</a></p>
			</div>
		</div>
	</body>
</html>
";

	// Set the headers for the email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: Griho Nirman Realty Pvt. Ltd. <contact@grihonirmanrealty.in>" . "\r\n";
	$headers .= "CC: sourav1grihonirman@gmail.com, admin@grihonirmanrealty.in" . "\r\n";
	$msg = wordwrap($message, 70);
	mail($newsletter_email, $subject, $body, $headers);
	$newsletter_code = "NLC_" . uniqid() . time();
	//========================= INSERT IN TABLE =======================
	mysqli_query($con, "INSERT INTO tbl_news_letter (
			newsletter_code,
			newsletter_email,
			entry_user_code
			) values(
			'" . $newsletter_code . "',
			'" . $newsletter_email . "',
			'User')");

	$status = "Save";
	$status_text = "Successfully added to the newsletter!";
}

$response = [
	'status' => $status,
	'status_text' => $status_text,
];
echo json_encode($response, true);
