<?php  require_once('Controllers/Control_acceso.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <script src="Assets/js/motor.js"></script>
</head>
<body>
    <?php require_once "Views\Shared\Header3View.php";?>
    <section>
         <h1> Hola <?php echo $_SESSION['nom_usu']; ?></h1>

        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium neque aperiam nisi voluptas enim, officia quia.</P>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ullam at nihil, perferendis suscipit dolorum amet quos voluptatibus, minus nesciunt officia quibusdam perspiciatis ut. Magni dolorem numquam libero nisi laudantium.</p>
    </section>

       
        

    <?php require_once "Views\Shared\Footer1View.php";?>
</body>
</body>
</html>