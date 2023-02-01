<?php
    include('config_login.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
        <?php include ('../errors.php');?>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email?>">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" value="">
        </div>
        <div>
            <button type="submit" name="log_user">login</button>
        </div>
    </form>
    
</body>
</html>