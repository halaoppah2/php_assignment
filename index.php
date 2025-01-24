<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>OPPAH GROUP OF COMPANIES</h1>
    <h2>Sales Management Portal</h2>

    <div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 40px">

    <!-- login form -->

        <form action="login.php" method="post">
            <fieldset style="width: 350px;">
                <legend><b>Login</b></legend>

                <label for="username">Username:</label>
                <input type="text" name="username" id="username" maxlength="5" required autocomplete="off"><br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" maxlength="8" required><br><br>

                <input type="submit" value="Login">

            </fieldset>
        </form>

    </div>
    
</body>

<style>
    body{
        background-color: linen;
    }

    legend{
        font-size: 15pt;
    }

    input{
        outline: none;
    }

    h1, h2{
        text-align: center;
    }
</style>

</html>