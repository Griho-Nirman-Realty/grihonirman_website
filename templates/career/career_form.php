<?php
include("../../templates/db/db.php");
global $timestamp;

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $telephone = $_POST['telephone'];
    $dob = $_POST['dob'];
    $experience = $_POST['experience'];

    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $resumeTmpPath = $_FILES['resume']['tmp_name'];
        $resumeName = $_FILES['resume']['name'];
        $resumeDir = 'upload_content/';
    
        // Ensure the upload directory exists
        if (!file_exists($resumeDir)) {
            mkdir($resumeDir, 0777, true);
        }
        
        // Generate a random string for the filename to avoid collisions
        $randomString = bin2hex(random_bytes(8)); // Generates an 16-character random string
        $resumePath = $resumeDir . $randomString . '_' . basename($resumeName);
        

        if (move_uploaded_file($resumeTmpPath, $resumePath)) {
            $stmt = $pdo->prepare("INSERT INTO tbl_career_page (full_name, email, country, telephone, dob, experience, resume) VALUES (:full_name, :email, :country, :telephone, :dob, :experience, :resume)");
            $stmt->bindParam(':full_name', $fullName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':resume', $resumePath);

            if ($stmt->execute()) {
                $response = ['status' => 'success', 'message' => 'Data inserted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to insert data'];
            }
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to upload file'];
        }
    } else {
        $response = ['status' => 'error', 'message' => 'No file uploaded or upload error'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);

} catch (PDOException $e) {
    $response = ['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()];
    header('Content-Type: application/json');
    echo json_encode($response);
}
