<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/add.css">
    <title>Add Student</title>
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
    ?>
    <h2>Enter Student Details</h2>
    <div>
        <form method="POST" action="InsertStudent.php"> <!--form to get student details-->
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required>
            <br>
            <label for="sName">Surname:</label>
            <input type="text" id="sName" name="sName" required>
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <br>
            <label for="mInfo">Medical Info:</label>
            <input type="text" id="mInfo" name="mInfo" required>
            <br>
            <label for="cID">Class:</label>
            <select id="cID" name="cID" required> <!--select box-->

            <?php
            $sql = "SELECT classID, className FROM Classes"; //get the classIDs and the class names
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) { //go through each class
                echo "<option value='" . $row['classID'] . "'>" . $row['className'] . "</option>"; //create a row in the select for each class name (with assosiated class ID)
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