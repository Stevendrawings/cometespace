<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Site en PHP</title>
</head>
<body>
    <?php  
        $ligne = 0;

            while ($ligne <= 10) {
                echo "Voici la copie du reglement numeros " . $ligne . " du lycée.</br>";
                $ligne++;
            }
    ?>
</body>
</html>