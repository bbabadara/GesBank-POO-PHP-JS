<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?= WEBROOT ?>/css/style.css">
</head>

<body>
 

    <main>
        <div class="container-fluid col-12 d-flex vh-100 ">
            <div class="container col-2  shadow-sm">
                <div>
                    <h4><?=$_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"]?></h4>
                    <h6 class="fw-light "><?=$_SESSION["user"]["libp"]?></h6>
                </div>
                <p class="fw-light fs-6 mt-3 mb-3">-MENU</p>
                <ul class="list-group">
                    <li class="list-group-item ">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=compte" class="list-group-item list-group-item-action <?= $_GET["controller"] == "compte" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> dashboard </span>Comptes
                        </a>
                    </li>
                    <li class="list-group-item">
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=demande" class="list-group-item list-group-item-action <?= $_GET["controller"] == "demande" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span>Demandes
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=client" class="list-group-item list-group-item-action <?= $_GET["controller"] == "client" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span>Clients
                        </a>
                    </li>
                    <li class="list-group-item ">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=agence" class="list-group-item list-group-item-action <?= $_GET["controller"] == "agence" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> dashboard </span>Agences
                        </a>
                    </li>
                    <li class="list-group-item">
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=profil" class="list-group-item list-group-item-action <?= $_GET["controller"] == "profil" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span>Profils
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=recu" class="list-group-item list-group-item-action <?= $_GET["controller"] == "recu" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span>Reçus
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=transaction" class="list-group-item list-group-item-action <?= $_GET["controller"] == "transaction" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span> Transactions
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=typeCompte" class="list-group-item list-group-item-action <?= $_GET["controller"] == "typeCompte" ? "active" : "" ?> d-flex align-item-center">
                            <span class="material-symbols-outlined px-2"> date_range </span>Type Compte
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= WEBROOT ?>/?ressource=html&controller=security&action=off" class=" d-flex align-item-center">
                            <button class="btn btn-danger">Se deconnecter</button> 
                        </a>
                    </li>

                </ul>

            </div>
            <div class="container col-10">
             <?=$contentForView ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>