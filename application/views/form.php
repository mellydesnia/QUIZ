<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?=base_url('index.php/Welcome/proses')?>" method="POST">
        <table>
        <!-- Username -->
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username'  placeholder="Username" /></td>
                </tr>
        <!-- /Username -->

        <!-- Password -->
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='pass' placeholder="Password" /></td>
                </tr>
        <!-- /Password -->
        <!-- Button --> 
            <tr>
                    <td></td>
                    <td><input type='submit' name='ok' value='Simpan'/></td>
                </tr>
        <!-- /Button -->
        </table>
</form>
</body>
</html>