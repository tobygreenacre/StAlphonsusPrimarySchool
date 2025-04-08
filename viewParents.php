<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/view.css">
    <title>View Parents</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1>
    </header>
    <h2>List of Parents</h2>
    <?php
    $host = "localhost"; //parameters for database connection
    $username = "root";    
    $password = "";   
    $dbname = "PrimarySchool"; 

    $conn = new mysqli($host, $username, $password, $dbname); //create database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //if connection error than display the error
    }

    //get information for parents
    $sql = "SELECT g_Fname, g_Sname, g_Address, g_Email, g_Number FROM Parents ORDER BY g_Sname ASC";
    $result = $conn->query($sql);
    $all_Parents = $result -> fetch_all(MYSQLI_ASSOC);
    echo "<div>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Address</th><th>Email</th><th>Phone Number</th></tr>"; //headings of table

    foreach ($all_Parents as $row) { //populate table with each parents information
        $fullName = $row["g_Fname"] . " " . $row["g_Sname"];
        echo "<tr>";
        echo "<td>" . $fullName . "</td>";
        echo "<td>" . $row["g_Address"] . "</td>";
        echo "<td>" . $row["g_Email"] . "</td>";
        echo "<td>" . $row["g_Number"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>
    <div><form action="home.php"><button>Home</button></form></div> <!--home button-->
</body>
</html>