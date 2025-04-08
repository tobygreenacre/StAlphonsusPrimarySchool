
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1> 
    </header>
    <ul> <!--list with buttons for the different pages of the website-->
        <li>
            <h2>Welcome!</h2> <!--title of the page below the header on most pages-->
        </li>
        <li>
            <form action="addStudent.php"><button class="add">Add Student</button></form>
        </li>
        <li>
            <form action="addTeacher.php"><button class="add">Add Teacher</button></form>
        </li>
        <li>
            <form action="addParent.php"><button class="add">Add Parent</button></form>
        </li>
        <li>
            <form action="ConnectStudent.php"><button class="add">Connect Parent to Student</button></form>
        </li>
        <li>
            <form action="viewStudents.php"><button class="view">View Students</button></form>
        </li>
        <li>
            <form action="viewTeachers.php"><button class="view">View Teachers</button></form>
        </li>
        <li>
            <form action="viewParents.php"><button class="view">View Parents</button></form>
        </li>
        <li>
            <form action="viewClasses.php"><button class="view">View Classes</button></form>
        </li>
    </ul>
</body>
</html>