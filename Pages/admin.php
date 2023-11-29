<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <header>
        <nav>
        
        </nav>
    <header>
    
    <main>
        <h1>Welcome Admin</h1>

        <div>
            <h2>Decrypted Data</h2>
            <ul>
                <?php
                function decryptData($data, $iv) {
                    return openssl_decrypt($data, 'aes-256-cbc', 'your_secret_key', 0, hex2bin($iv));
                }

                $db = new SQLite3('C:\xampp\htdocs\Intro Software Group Work\DB\ModernFitGymDatabase.db');

                $result = $db->query("SELECT * FROM Members");

                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    $decrypted_credit_details = decryptData($row['Credit_Details'], $row['IV']);
                    $decrypted_password = decryptData($row['Password'], $row['IV']);

                    echo "<li>First Name: " . $row['First_Name'] . "</li>";
                    echo "<li>Last Name: " . $row['Last_Name'] . "</li>";
                    echo "<li>DOB: " . $row['DOB'] . "</li>";
                    echo "<li>Address: " . $row['Address'] . "</li>";
                    echo "<li>Phone Number: " . $row['Phone_Number'] . "</li>";
                    echo "<li>Email: " . $row['Email'] . "</li>";
                    echo "<li>Credit Details: " . $decrypted_credit_details . "</li>";
                    echo "<li>Password: " . $decrypted_password . "</li>";
                    echo "<br>";
                }

                $db->close();
                ?>
            </ul>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>
