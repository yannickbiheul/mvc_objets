<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinésite</title>
</head>
<body>
    <?php
        foreach($genres as $genre) {?>
            <li><?= $genre->getName() ?></li><?php
        }
    ?>
</body>
</html>