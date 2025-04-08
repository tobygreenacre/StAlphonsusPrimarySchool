<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/add.css">
    <title>Add Parent</title>
</head>
<body>
    <header>
        <h1>St Alphonsus Primary School</h1> 
    </header>
    <h2>Enter Parent Details</h2> 
    <div>
        <form method="POST" action="InsertParent.php"> <!--form to take the information for parent-->
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required>
            <br>
            <label for="sName">Surname:</label>
            <input type="text" id="sName" name="sName" required>
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <br>
            <label for="eMail">Email:</label>
            <input type="text" id="eMail" name="eMail" required>
            <br>
            <label for="pNumber">Phone Number:</label>
            <input type="text" id="pNumber" name="pNumber" required>
            <br>
            <button type="submit">Submit</button> <!--submit button-->
        </form>
        <form action="home.php"><button>Home</button></form> <!--home button-->
    </div>
</body>
</html>