


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="register.css">
        <title>Register Form TD</title>
    </head>

    <body>
        <h1>Register</h1>

        <!-- Here is your form -->
        <form action="./check_register.php" method="post">
            
            <div>
                <label for="email">Email: </label>
                <input id="email" type="mail" placeholder="xxx@xxx.xxx" name="email"/>
            </div>
            
            <div>
                <label for="pwd">Password: </label>
                <input id="pwd" type="password" name="pwd" />
            </div>

            <div>
                <label for="pwd2">Repeat your password: </label>
                <input id="pwd2" type="password" name="pwd2" />
            </div>

            <div>
                <label for="birth">Birth date: </label>
                <input id="birth" type="date" name="birth"/>
            </div>

            <div>
                <input type="submit" value="Validate"/>
            </div>

        </form>

        <!-- At least tell users what they have to do -->
        <p>Your password must:</p>
        <ul>
            <li <?= isset($_GET['error']) && $_GET['error'] === 'length' ? 'class="error"' : '' ?>>Be at least 8 characters long</li>
            <li>Contain both uppercase and lowercase characters</li>
        </ul>

    </body>
</html>