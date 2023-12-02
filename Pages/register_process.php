<?php
// Generate a secure random IV
$iv = openssl_random_pseudo_bytes(16); // 16 bytes for AES-256-CBC

// Convert IV to a hexadecimal representation to store it or send it along with the encrypted data
$hex_iv = bin2hex($iv);

// Establish SQLite database connection
$db = new SQLite3('C:\xampp\htdocs\Intro Software Group Work\DB\ModernFitGymDatabase.db');

// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$credit_details = $_POST['credit_details'];
$password = $_POST['password'];

// Encrypt sensitive data using the generated IV
$encrypted_credit_details = openssl_encrypt($credit_details, 'aes-256-cbc', 'your_secret_key', 0, $iv);
$encrypted_password = openssl_encrypt($password, 'aes-256-cbc', 'your_secret_key', 0, $iv);

// Prepare and execute the SQL query
$stmt = $db->prepare("INSERT INTO Members (First_Name, Last_Name, DOB, Address, Phone_Number, Email, Credit_Details, Password, IV) VALUES (:firstname, :lastname, :dob, :address, :phone, :email, :credit_details, :password, :iv)");
$stmt->bindValue(':firstname', $firstname);
$stmt->bindValue(':lastname', $lastname);
$stmt->bindValue(':dob', $dob);
$stmt->bindValue(':address', $address);
$stmt->bindValue(':phone', $phone);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':credit_details', $encrypted_credit_details);
$stmt->bindValue(':password', $encrypted_password);
$stmt->bindValue(':iv', $hex_iv); // Store the IV for decryption

$result = $stmt->execute();

if ($result) {
    echo "Registration successful!";
    header("Location: login.html");
    exit();

} else {
    echo "Error occurred while registering.";
}

// Close database connection
$db->close();
?>
