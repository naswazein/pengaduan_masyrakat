<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="form-container">
        <form action="prosesregister.php" method="post">
            <h3>Register Now</h3>
            <input type="text" name="nik" required placeholder="enter your nik">
            <br>
            <input type="text" name="name" required placeholder="enter your name">
            <br>
            <input type="text" name="username" required placeholder="enter your username">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <input type="text" name="phonenumber" required placeholder="enter your phonenumber">
            <br>
            <select name="user_type" class="user">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <br>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an acount? <a href=login.php>Login now</a></p>
        </form>

</div>
</body>

</html>