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
    <div>
        <?php phpinfo() ?>
        <br>
        <?php
        var_dump(mysqli_connect(
            'mysql',
            'admin',
            'admin',
            'base',
            3306
        )->get_connection_stats());
        ?>
    </div>
</div>
</body>
