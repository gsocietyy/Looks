<?php
include('connection.php');
$errors=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
   function sanitizeInput($data){
    return htmlspecialchars(trim($data));
   }

$first_name = sanitizeInput($_POST["first_name"]);
$last_name = sanitizeInput($_POST["last_name"]);
$email = sanitizeInput($_POST["user_email"]);
$phone_number = sanitizeInput($_POST["phone_number"]);
$password = sanitizeInput($_POST["password"]);
$confirm_password = sanitizeInput($_POST["confirm_password"]);


if(empty($first_name)){
    $errors[]= "First name is required";
}
if(empty($last_name)){
    $errors[]= "Last name is required";
}
if(empty($email)){
    $errors[]= "Email is required";
}
if(empty($phone_number)){
    $errors[]= "PhoneNumber is required";
}
if (empty($password)) {
    $errors[] = "Password is empty";
} elseif (strlen($password) < 8) {
    $errors[] = "Password should contain at least 8 characters";
} elseif ($password !== $confirm_password) {  // If password does not match
    $errors[] = "Password does not match";
} elseif (!preg_match('/[A-Z]/', $password)) {  // Check for at least one uppercase letter
    $errors[] = "Password should contain at least one uppercase letter";
} elseif (!preg_match('/[a-z]/', $password)) {  // Check for at least one lowercase letter
    $errors[] = "Password should contain at least one lowercase letter";
} elseif (!preg_match('/[\W_]/', $password)) {  // Check for at least one symbol
    $errors[] = "Password should contain at least one special character (e.g., @, #, $, etc.)";
}



$user_check_query = "SELECT * FROM users WHERE phone_number='$phone_number' OR user_email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {  // If user exists
        if ($user['phone_number'] == $phone_number) {
          $errors[]="Phone number already exists";
        }
    
        if ($user['user_email'] == $email) {
          $errors[]="email already exists";
        }
      }


if(empty($errors)){
$hashed_password = password_hash($password,PASSWORD_DEFAULT);

$stmt = $conn->prepare("Insert into users(first_name,last_name,user_email,phone_number,password) values(?,?,?,?,?);");

$stmt->bind_param("sssss",$first_name,$last_name,$email,$phone_number,$hashed_password); 
$result=$stmt->execute();

if($result){ //if the result is true.
    header('location:login.php');
}
else{
    echo "Error" .$stmnt->error ?? "unknown error";
}

$stmt->close();
    }
else{
    foreach($errors as $error){
        echo $error."<br>";
    }
}
$conn->close();
}

?>