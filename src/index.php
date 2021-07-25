<html lang="en">
<head>
    <title>Welcome!</title>
    <style>
        .flex {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
</html>
<body>
<div class="flex">
    <h2><?php echo date('H:i:s d.m.Y')?></h2>
    <h1>Welcome to web-app in Docker Container!</h1>
    <div class="flex">
        <?php
        $mysqli = new mysqli("mysql", "admin", "admin", "base", 3306);
        echo "MYSQL status: ";
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
        } else {
            printf ("%s\n", $mysqli->stat());
            $mysqli->close();
        }
        ?>
    </div>
    <div>
        <?php phpinfo() ?>
    </div>
</div>
</body>
