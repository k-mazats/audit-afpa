<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audit AFPA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="SHORTCUT ICON" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>

<body>
    <?php
    require("./includes/header.php");
    ?>
    <main>
        <?php
        if (isset($_GET["page"]) && !empty($_GET["page"])) {
            switch ($_GET["page"]) {
                case "medias":
                    require("./includes/medias.php");
                    break;
                case "contact":
                    require("./includes/contact.php");
            }
        } else {
            require("./includes/dbQuery.php");
        }
        ?>
    </main>
    <?php
    require("./includes/footer.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./scripts/script.js"></script>
</body>

</html>