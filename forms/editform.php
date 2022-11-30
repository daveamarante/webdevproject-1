<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    $id = $_GET['id'];

    $result = mysqli_query($dbc, "SELECT * FROM TBLSUBJECTS WHERE SUBJECT_ID = $id");
    while($res = mysqli_fetch_array($result)) {
        $code = $res['SUBJECT_CODE'];
        $name = $res['SUBJECT_NAME'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Subject</h1>
    <a href="../index.php">Home</a>
    <br><br>
    <form action="../functions/edit.php" name="form1" method="post">
        <table border="0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo $code; ?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>