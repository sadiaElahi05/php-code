<!DOCTYPE html>
<html>
<head>
    <title> PHP Form </title>
</head>
<body>
    <form action="saveToDatabase.php" method="POST">
        <h2>PHP, MySQL Form </h2>
        <table>
            <tr>
                <td> Text Field </td> <td>:</td>
                <td><input type="text" name="textfield"></td>
            </tr>

            <tr>
                <td>Text Area</td> <td>:</td>
                <td><textarea name="textarea" id="textarea" cols="30" rows="10"></textarea> </td>
            </tr>

            <tr>
                <td>Check Boxes</td><td>:</td>
                <td><input type="checkbox" name="checkbox" value="box"> Box </td>
            </tr>

            <tr>
                <td>Multiple Check Boxes</td> <td>:</td>
                <td>
                    <input type="checkbox" name="mcheckbox1" value="box1"> Box 1
                    <input type="checkbox" name="mcheckbox2" value="box2"> Box 2
                </td>
            </tr>
            
            <tr>
                <td>Radio Buttons</td>
                <td>
                    <input type="radio" name="radio" value="Red"> Red 
                    <input type="radio" name="radio" value="Blue"> Blue
                </td> 
            </tr>

            <tr>
                <td> List Boxes </td>
                <td>
                    <select name="listbox" id="listbox">
                        <option value="Coffee">Coffee</option>
                        <option value="Tea">Tea</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Password</td><td>:</td>
                <td><input type="password" name="password"></td>
            </tr>

        </table>

        <input type="reset">
        <input name='submit' type='submit'>
    </form>
</body>
</html>