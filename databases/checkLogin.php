<?php
    session_start();
    include 'connect.php';


    if (isset($_SESSION["userId"])) {
        header("Location: /Learning");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT password FROM users WHERE LoginID='$email'";
        $result = $conn->query($sql);
        // $dbPass= $result->fetch_row("password");



        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                echo '<script>alert("Login Successfully");</script>';

                $_SESSION['userId'] = $email;
                $_SESSION['id'] = $row['id'];
                // $_SESSION['userPic'] = base64_encode($row['image_data']);
                header("Location: /Learning");


            } else {
                echo '<script>alert("| Invalid Password |")</script>';
                // echo $row['password'] . "    =    " . $password;
                header("Location: /login");
            }
        } else {
            echo '<script>alert("| Email Not Found |")</script>';
            header("Location: /login");
        }
    }
?>