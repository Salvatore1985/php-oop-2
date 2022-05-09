<?php
include_once __DIR__ . "/classes/Products.php";
include_once __DIR__ . "/classes/User.php";

$claudio = new User("claudio", "pippo85", "2563254UF451", true, true, "gatto", null);
var_dump($claudio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>
    <main>

        <?php echo $claudio->getUserName(); ?>
    </main>
</body>

</html>