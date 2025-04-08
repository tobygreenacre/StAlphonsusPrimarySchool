<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/insert.css">
    <title>Success!</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1>
    </header>
    <?php
    $host = "localhost"; //parameters for database connection
    $username = "root";    
    $password = "";   
    $dbname = "PrimarySchool"; 

    $conn = new mysqli($host, $username, $password, $dbname); //create database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //if connection error than display the error
    }

    $sID = $_POST['student']; //use post method to get the student id and parent id
    $gID = $_POST['parent']; 

    $sql = "INSERT INTO Parents_Pupils (g_ID, p_ID) VALUES ('$gID', '$sID')"; //create sql to insert the values into the junction table

    if ($conn->query($sql) === TRUE) { //if sql command runs successfully
        echo "<h2>Student and Guardian Connected!</h2>"; //tell user that it worked
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error; //show error if failed
    }
    ?>
    <div>
        <form action="home.php"><button>Return Home</button></form> <!--home button-->
    </div>
</body>
</html>



