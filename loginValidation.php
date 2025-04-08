
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Home</title>
</head>
<body>
    <?php
        $username = $_POST['uName']; //use post method to get username and password from form
        $password = $_POST['pWord'];

        if ($username === "admin" && $password === "password") { //if the username and password are correct
            header("Location: home.php"); //open home.php file
            exit();
        } else { //if username and password are incorrect
            ?>
                <div class="denied">
                    <h1>Access Denied</h1>
                    <p>Invalid username or password. <a href='index.html'>Try again</a>.</p> <!--tells the user that access is denied and give link to go back to login page-->
                </div>
            <?php   
        }
    ?>
</body>
</html>