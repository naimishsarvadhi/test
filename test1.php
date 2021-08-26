<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>testing</title>
</head>

<body>
    <div class="container">
        <div class="primary btn-primary">demo</div>
        <div class="success btn-success">demo</div>
        <div class="danger btn-danger">demo</div>
        <div class="dark btn-dark">demo</div>
    </div>

    <form action="test.php" method="POST" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>Username : </td>
                <td>
                    <input type="text" name="" placeholder="user@example.com">
                </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td>
                    <input type="pass" name="" placeholder="user@example.com">
                </td>
            </tr>
            <tr>
                <td>Submit : </td>
                <td>
                    <input type="submit" name="save" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>