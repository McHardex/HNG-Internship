<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>figma mock-up</title>
    <link href="https://fonts.googleapis.com/css?family=Ribeye" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <p>figma</p>
        </div>
        <div class="currentDate">
        <?php
        date_default_timezone_set("Africa/Lagos");
        echo date("h:i A");
        
        ?>
        </div>
        <div class="welcome">
            <p>Welcome to my first figma design</p>
        </div>
    </div>
</body>

</html>