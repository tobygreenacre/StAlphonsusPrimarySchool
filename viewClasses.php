<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/view.css">
    <title>View Student</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1>
    </header>
    <h2>List of Students</h2>
    <?php
    $host = "localhost"; //parameters for database connection
    $username = "root";    
    $password = "";   
    $dbname = "PrimarySchool"; 

    $conn = new mysqli($host, $username, $password, $dbname); //create database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //if connection error than display the error
    }

    //join classes and teachers table through the teacher ID and get the information needed
    $sql = "SELECT c.className, c.classCapacity, t.t_Fname, t.t_Sname FROM Classes c JOIN Teachers t ON c.t_ID = t.t_ID ORDER BY c.className ASC";
    $result = $conn->query($sql);
    $all_Classes = $result -> fetch_all(MYSQLI_ASSOC);
    echo "<div>";
    echo "<table>";
    echo "<tr><th>Class</th><th>Capacity</th><th>Teacher</th></tr>"; //headings of the table

    foreach ($all_Classes as $row) { //populate table with each classes information
        $fullName = $row["t_Fname"] . " " . $row["t_Sname"];
        echo "<tr>";
        echo "<td>" . $row["className"] . "</td>";
        echo "<td>" . $row["classCapacity"] . "</td>";
        echo "<td>" . $fullName . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>
    <div><form action="home.php"><button>Home</button></form></div> <!--home button-->
</body>
</html>