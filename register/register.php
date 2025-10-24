<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register Form TD</title>

</head>

<body>
    <?php
    $errors = $_GET['error'] ?? [];

    if (!empty($errors)) {
        echo '<ul class="error-msg">';
        if (in_array('len', $errors)) {
            echo '<li>Your password should be at least 8 characters long</li>';
        }
        if (in_array('case', $errors)) {
            echo '<li>Your password should contain both uppercase and lowercase characters</li>';
        }
        if (in_array('match', $errors)) {
            echo '<li>The two passwords you entered should be the same</li>';
        }
        echo '</ul>';
    }
    $pwdClass = (in_array('len', $errors) || in_array('case', $errors)) ? 'error-input' : '';
    $pwd2Class = (in_array('match', $errors)) ? 'error-input' : '';
    ?>

    <h1>Register</h1>

    <form action="./check_register.php" method="post">

        <div>
            <label for="email">Email: </label>
            <input id="email" type="mail" placeholder="xxx@xxx.xxx" name="email" />
        </div>

        <div>
            <label for="pwd">Password: </label>
            <input id="pwd" type="password" name="pwd" class="<?= $pwdClass ?>" />
        </div>

        <div>
            <label for="pwd2">Repeat your password: </label>
            <input id="pwd2" type="password" name="pwd2" class="<?= $pwd2Class ?>" />
        </div>

        <div>
            <label for="birth">Birth date: </label>
            <input id="birth" type="date" name="birth" />
        </div>

        <div>
            <input type="submit" value="Validate" />
        </div>

    </form>

    <p>Your password must:</p>
    <ul>
        <li>Be at least 8 characters long</li>
        <li>Contain both uppercase and lowercase characters</li>
    </ul>

</body>

</html>