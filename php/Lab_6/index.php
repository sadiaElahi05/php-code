<!DOCTYPE html>
<html>
<head>
    <title> Student Information </title>
</head>
<body>
    <form action="saveToDatabase.php" method="POST">
        <h2>Student Information And Result </h2>
        <table>
            <tr>
                <td> Name </td> <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Roll</td> <td>:</td>
                <td><input type="text" name="roll"></td>
            </tr>

            <tr>
                <td>Semester</td><td>:</td>
                <td><input type="text" name="semester"></td>
            </tr>

            <tr>
                <td>Subject 1</td><td>:</td>
                <td><input type="text" name="subject1"></td>
            </tr>

            <tr>
                <td>Subject 2</td><td>:</td>
                <td><input type="text" name="subject2"></td>
            </tr>
            
        </table>

        <input type="reset">
        <input name='submit' type='submit'>
    </form>
</body>
</html>