<?php
include('database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, email,name, password) VALUES ('$username', '$email', '$fullname', '$password' )";
    $result = mysqli_query($conn, $sql);



    if ($result === true) {
        echo "<script>alert('Registration Successfull') </script>";
        header("Location: login.php");

    } else {
        echo "Error: " . mysqli_error($conn);
    }


    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html>




<head>
    <title>Registration Form</title>
    <style>
        body {
            margin-top: 11%;

        }

        * {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .container {
            width: 400px;
            height: 350px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container h2 {
            text-align: center;
        }

        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .container input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .container input[type="submit"]:hover {

            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div style="display: flex;">
        <div class="container">
            <h2>Registration Form</h2>
            <form action="register.php" method="POST">
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                <input type="text" id="username" name="username" placeholder="username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="submit" value="Register">


            </form>
            <P style="float: right; text-decoration: none;">Already have account? <a href="login.php">Login</a></P>
        </div>

        <div>
            <img style="width: 100%;"
                src="https://media.istockphoto.com/id/1312423107/vector/stealing-data-concept-flat-vector-illustration-online-registration-form-login-to-social.jpg?s=170667a&w=0&k=20&c=CPalLiPr3v3L0FoED18nVbucVjL_oKx2vTffsOXZTXU="
                alt="">
        </div>
    </div>
</body>

</html>