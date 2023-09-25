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
    <?php include_once('php/header.php'); ?>
<main>
<!--je récupére mon id dans l'url si ell est vide je revient à l'index-->
<?php  if (isset($_GET['id'])) {
        $id = $_GET['id'];
        /*echo "L'id passé dans l'URL est : $id";*/
    } else {
        header("Location: index.php");

    }?>
<?php include_once('php/oeuvres.php'); ?>
<!--je parcour mon tableau de tableau jusqu'à trouver celui qui correspond à celle passé dans l'url-->
<?php foreach($oeuvres as $oeuvre) : ?>
    <?php if ($oeuvre["id_oeuvre"] === $id): ?>
        <article id="detail-oeuvre">
            <!--je décale de 1 ma valeur id pour correspondre à celle de mon tableau-->
                <?php $id = $id-1;?>
                <div id="img-oeuvre">
                    <img src="img/<?php echo($oeuvres[$id]['image']);?>" alt="<?php echo($oeuvres[$id]['titre']);?>">
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo($oeuvres[$id]['titre']);?></h1>
                    <p class="description"><?php echo($oeuvres[$id]['auteur']);?></p>
                    <p class="description-complete">
                        <?php echo($oeuvres[$id]['description']);?>
                    </p> 
                </div>                              
        </article> 
    <?php endif; ?>
<?php endforeach ?> 

</main>
<?php include_once('php/footer.php'); ?>
</body>
</html>
