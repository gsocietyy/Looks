<?php
include('connection.php');
session_start();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitizeInput($data) {
        return htmlspecialchars(trim($data)); // Trim and sanitize input
    }

    // Fetch input from the form
    $phone_number = sanitizeInput($_POST["phone_number"]);
    $password = sanitizeInput($_POST["password"]);

    // Form validation
    if (empty($phone_number)) {
        $errors[] = "PhoneNumber is required";
    }
    if (empty($password)) {
        $errors[] = "Please enter your password";
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE phone_number=?");
        $stmt->bind_param("s", $phone_number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $hashed_password = $user['password']; // Get the hashed password from the database
            
            if (password_verify($password, $hashed_password)) {
                // Redirect to the desired page
                $_SESSION['user_id'] = $user['user_id'];
                header("Location: index.php");
                exit; // Important: Terminate further script execution
            } else {
                $errors[] = "Invalid password"; 
            }
        } else {
            $errors[] = "No user found with that phone number";
        }
        
        $stmt->close();
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

    $conn->close();
}
?>
