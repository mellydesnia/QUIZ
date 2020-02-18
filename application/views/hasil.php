<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
</head>
<body>
<center>
    <h3> Hasil Inputan</h3>
    <table>
        <!-- Username -->
        <tr>
            <td>Username</td>
            <td><?= $username?></td>
        </tr>
        <!-- /Username -->

        <!-- Password -->
        <tr>
            <td>Password</td>
            <td><?= $password?></td>
        </tr>
        <!-- /Password -->

        <!-- MD5 Password -->
        <tr>
            <td>MD5 Password</td>
            <td><?= $md5?></td>
        </tr>
        <!-- /MD5 Password -->

    </table>
</center>
</body>
</html>