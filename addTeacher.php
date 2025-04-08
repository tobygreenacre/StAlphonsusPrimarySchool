<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/add.css">
    <title>Add Teacher</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1>
    </header>
    <h2>Enter Teacher Details</h2>
    <div>
        <form method="POST" action="InsertTeacher.php"> <!--form to take the information for teacher-->
            <label for="fName">First Name:</label>
            <input type="text" name="fName" required></input>
            <br>
            <label for="sName">Surname:</label>
            <input type="text" name="sName" required></input>
            <br>
            <label for="address">Address:</label>
            <input type="text" name="address" required></input>
            <br>
            <label for="pNumber">Phone Number:</label>
            <input type="text" name="pNumber" required></input>
            <br>
            <label for="bCheck">Background Check:</label>
            <input type="text" name="bCheck" required></input>
            <br>
            <label for="Salary">Salary:</label>
            <input type="number" name="Salary" required></input>
            <br>
            <button type="submit">Submit</button> <!--submit button-->
        </form>
        <form action="home.php"><button>Home</button></form> <!--home button-->
    </div>
</body>
</html>