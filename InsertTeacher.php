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

    // Get form data
    $fName = $_POST['fName'];
    $sName = $_POST['sName'];
    $address = $_POST['address'];
    $pNumber = $_POST['pNumber'];
    $bCheck = $_POST['bCheck'];
    $Salary = $_POST['Salary'];

    // Insert data into the teachers table
    $sql = "INSERT INTO Teachers (t_Fname, t_Sname, t_Address, t_phoneNum, t_BackgroundCheck, t_Salary) VALUES ('$fName', '$sName', '$address', '$pNumber', '$bCheck', '$Salary')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>New Teacher added successfully!</h2>"; //tell user it worked
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error; //tell user it failed
    }
    ?>
    <div>
        <form action="home.php"><button>Return Home</button></form> <!--home button-->
    </div>
</body>
</html>


