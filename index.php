<?php
include_once __DIR__ . "/classes/Products.php";
include_once __DIR__ . "/classes/User.php";

$claudio = new User("claudio", "pippo85", "2563254UF451", true, true, "gatto", false, 50);
/* var_dump($claudio); */
$franco = new User("franco", "ciccio98", "25252515JNKJ6", true, true, "cane", true, 100);

var_dump($franco)
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
        <h1>e la prima registrazione: <?php echo $franco->getIsRegistration() ?></h1>
        <h1>prezzo scontato <?php echo $franco->getPrice() ?></h1>
        <!-- <h1> <?php echo $franco  ?></h1> -->
        <?php echo $claudio->getUserName() . $claudio->getDiscount() ?>
    </main>
</body>

</html>