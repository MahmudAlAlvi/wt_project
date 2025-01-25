<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <table width="40%" border="0" align="center">
        <tr>
            <td>
                <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form method="POST" action="../controller/passChange.php" enctype="">
                        New Password: <input type="password" name="new_password" required><br><br>
                        Retype New Password: <input type="password" name="confirm_password" required><br>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>
