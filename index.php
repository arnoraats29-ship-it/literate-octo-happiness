<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: #f5f5f0;
        }

        .shape {
            position: absolute;
        }
    </style>
</head>
<body>
    <?php
        require_once __DIR__ . '/Classes/Shape.php';

        $shape = new Shape('red', 100, 50);
        echo $shape->render();
    ?>
</body>
</html>