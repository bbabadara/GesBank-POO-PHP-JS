<div class="container col-2  shadow-sm">
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

    </ul>

</div>