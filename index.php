<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
</head>
<body>
    <p>
        <?php
           $firstVar = 100;
           $secondVar = 52;
           while ($firstVar > 10) {
               echo($firstVar * $secondVar . ' ');
               $firstVar--;
           }
        ?>
    </p>
</body>
</html>