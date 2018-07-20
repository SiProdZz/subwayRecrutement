<!-- Page d'accueil qui va être récupéré par le CONTROLLER
        - image de présentation qui ramène à la page recrutement
        - Le recrutement pour qui? En quoi consiste le travail brièvement
        - Les deux restaurants avec redirection à la page recrutement
        - map avec localisation des restaurants-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Subway</title>
    <link href="public/css/accueil.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="public/images/favicon.png" />
    <META NAME="Description" CONTENT="Franchise Subway. restauration 'Le Kremlin-Bicêtre' et ' Val de Fontenay' recrute du personnel. Informations : Qui nous recrutement. Un bref détail du job à réaliser au sein de l'entreprise. Une carte pour la localisation des restaurants et des informations complémentaires.">
    <META NAME="Identifier-URL" CONTENT="url du site dans l'hébergeur">
    <META NAME="Keywords" CONTENT="Subway, recrutement, personnel, job, travail, embauche">
</head>

<body>
    <?php require('public/textFunctions/header.php'); ?>
    
    <section id="presentation">
    
      <div id="banniere">
        <div id="fondBanniere"></div>
        <p id="textBanniere">Rejoignez-nous !</p>        
    </div>
    </section>

    <?php while ($restaurant= $donneesRestaurant->fetch()) { ?>
    
    <div>
        <?= htmlspecialchars($restaurant['id']) ?>
        <?= htmlspecialchars($restaurant['ville']) ?>
        <?= htmlspecialchars($restaurant['adresse']) ?>
        <?= htmlspecialchars($restaurant['telephone']) ?>
    </div>

    <?php }  $donneesRestaurant->closeCursor(); ?>

    <?php require('public/textFunctions/footer.php'); ?>

</body>

</html>
