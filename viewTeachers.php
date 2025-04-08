<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/view.css">
    <title>View Teachers</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1>
    </header>
    <h2>List of Teachers</h2>
    <?php
    $host = "localhost"; //parameters for database connection
    $username = "root";    
    $password = "";   
    $dbname = "PrimarySchool"; 

    $conn = new mysqli($host, $username, $password, $dbname); //create database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //if connection error than display the error
    } 

    $sql = "SELECT t_Fname, t_Sname, t_Address, t_phoneNum, t_BackgroundCheck, t_Salary FROM Teachers ORDER BY t_Sname ASC";
    $result = $conn->query($sql);
    $all_Teachers = $result -> fetch_all(MYSQLI_ASSOC);
    echo "<div>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Address</th><th>Phone Number</th><th>Background Check</th><th>Salary</th></tr>"; //headings of the table

    foreach ($all_Teachers as $row) { //populate table with each teachers information
        $fullName = $row["t_Fname"] . " " . $row["t_Sname"];
        echo "<tr>";
        echo "<td>" . $fullName . "</td>";
        echo "<td>" . $row["t_Address"] . "</td>";
        echo "<td>" . $row["t_phoneNum"] . "</td>";
        echo "<td>" . $row["t_BackgroundCheck"] . "</td>";
        echo "<td>£" . $row["t_Salary"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>
    <div><form action="home.php"><button>Home</button></form></div> <!--home button-->
</body>
</html>