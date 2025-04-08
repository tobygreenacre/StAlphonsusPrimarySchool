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

    $sql = "SELECT p.p_Fname, p.p_Sname, p.p_Address, p.p_MedicalInfo, c.className FROM Pupils p JOIN Classes c ON p.classID = c.classID ORDER BY p.p_Sname ASC";
    $result = $conn->query($sql);
    $all_Students = $result -> fetch_all(MYSQLI_ASSOC);
    echo "<div>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Address</th><th>Medical Info</th><th>Class</th></tr>"; //headings of the table

    foreach ($all_Students as $row) { //populate table with each students information
        $fullName = $row["p_Fname"] . " " . $row["p_Sname"];
        echo "<tr>";
        echo "<td>" . $fullName . "</td>";
        echo "<td>" . $row["p_Address"] . "</td>";
        echo "<td>" . $row["p_MedicalInfo"] . "</td>";
        echo "<td>" . $row["className"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>
    <div><form action="home.php"><button>Home</button></form></div> <!--home button-->
</body>
</html>