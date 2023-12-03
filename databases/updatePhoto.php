<?php 
    session_start();
    $servername = "192.168.1.4";
    $username = "amrit";
    $pass = "1234";
    $dbname = "LearnHTML";

    $conn = new mysqli($servername, $username, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $image = $_FILES['image']['tmp_name'];
        $imageData = addslashes(file_get_contents($image));
        
        $id = strval($_SESSION['userId']);
        // Read the new image data

        $sql = "UPDATE users SET image_data = ? WHERE LoginID = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('bs', $imageData, $_SESSION['userId']);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Image updated successfully";
        } else {
            echo "<h1>Error updating image: " . $stmt->error . "</h1>";
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
    <h1>Check Page  </h1>
</body>
</html>