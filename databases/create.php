<?php 
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
    
        $sql = "INSERT INTO users (LoginID, password) values ('$email','$password')";
        
        try {
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Successfully Created !!")</script>';
                // header("Location: /login");
            }
        } catch (Exception $sql) {
            echo '<script>alert("Error | in Database ! ")</script>';
            // header("Location: /signup");
            exit;
        }
    }
    
    $conn->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        setTimeout(3000)
        window.location = "/login";
    </script>
</body>
</html>