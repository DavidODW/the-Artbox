<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <!--changement header-->
    <?php include_once('php/header.php'); ?>
    <main>
        <div id="liste-oeuvres">
                <!--intégration de mon tableaux des oeuvres dans la page principale -->
                <?php include_once('php/oeuvres.php'); ?>    
                <?php foreach($oeuvres as $oeuvre) : ?>
                    <article class="oeuvre">
                        <a href="oeuvre.php?id=<?php echo($oeuvre['id_oeuvre']);?>">
                            <img src="img/<?php echo($oeuvre['image']);?>" alt="<?php echo($oeuvre['titre']);?>">
                            <h2><?php echo($oeuvre['titre']);?></h2>
                            <p class="description"><?php echo($oeuvre['auteur']);?></p>
                        </a>
                    </article>
                <?php endforeach ?>

        </div>
    </main>
    <!--changement footer-->
    <?php include_once('php/footer.php'); ?>
</body>
</html>