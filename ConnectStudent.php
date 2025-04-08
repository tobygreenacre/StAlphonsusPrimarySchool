<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/connect.css">
    <title>Connect Student and Teacher</title>
</head>
<body>
    <header>    
        <h1>St Alphonsus Primary School</h1>
    </header>
    <h2>Connect Student to Teacher</h2>
    <?php
    $host = "localhost"; //parameters for database connection
    $username = "root";    
    $password = "";   
    $dbname = "PrimarySchool"; 

    $conn = new mysqli($host, $username, $password, $dbname); //create database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //if connection error than display the error
    }
    ?>
    <div>
        <form method="POST" action="Connected.php"> <!--form with two selects-->
            <label for="student">Student:</label>
            <select name="student" required>
            <?php
            $sql = "SELECT p_ID, p_Fname, p_Sname FROM Pupils"; //get student name and ID
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) { //fill select with each students name that corrosponds to their ID
                echo "<option value='" . $row['p_ID'] . "'>" . $row['p_Fname'] . " " . $row['p_Sname'] . "</option>";
            }
            ?>
            </select>
            <br>
            <label for="parent">Parent:</label>
            <select name="parent" required>
            <?php
            $sql2 = "SELECT g_ID, g_Fname, g_Sname FROM Parents"; //get parent name and ID
            $result2 = $conn->query($sql2);
            while($row2 = $result2->fetch_assoc()) { //fill select with each parents name that corrosponds to their ID
                echo "<option value='" . $row2['g_ID'] . "'>" . $row2['g_Fname'] . " " . $row2['g_Sname'] . "</option>";
            }
            ?>
            </select>
            <br>
            <button type="submit">Submit</button> <!--submit button-->
        </form>
        <form action="home.php"><button>Home</button></form> <!--home button-->
    </div>
</body>
</html>