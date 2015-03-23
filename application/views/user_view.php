<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <form action="">
            <input type="text" name="login"/>
            <input type="password" name="password" />
        </form>
        <?php
            echo $data['last'] -> userid;
            echo '<br>';
            echo $data['last'] -> login;
            echo '<br>';
            echo $data['last'] -> password;

            echo $data['id'] -> userid;

        ?>
    </body>
</html>