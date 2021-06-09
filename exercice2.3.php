<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2.3</title>
</head>
<body>
    <h1>Exercice 3 Partie 2 : Les conditions PHP</h1>
    <p>
        <?php
            $age = 89;
            $gender = "femme";
            if ($age >=18 AND $gender = "femme")
            {
                echo "Vous êtes une femme et vous êtes majeure";
            }
            elseif ($age < 18 AND $gender = "femme")
            {
                echo "Vous êtes une femme et vous êtes mineures";
            }
            elseif ($age >=18 AND $gender = "homme")
            {
                echo "Vous êtes un homme et vous êtes majeur";
            }
            elseif ($age <18 AND $gender = "homme")
            {
                echo "Vous êtes un homme et vous êtes mineur";
            }
        ?>
    </p>
</body>
</html>
