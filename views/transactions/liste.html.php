<?php if ($_SESSION["user"]["libp"] == "Client") : ?>
    <h2>Mes transactions</h2>
<?php else : ?>
    <h2>Toutes les transactions</h2>
<?php endif ?>
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">Date </th>
            <th scope="col">Montant</th>
            <th scope="col">Client</th>
            <th scope="col">Numero de compte</th>
            <th scope="col">type</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody id="tBody">
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $data->datetr ?></td>
                <td><?= $data->montant ?> </td>
                <td><?= $data->prenom . " " . $data->nom ?></td>
                <td><?= $data->numero ?></td>
                <td><?= $data->type ?></td>
                <td>Actions</td>
            </tr>
        <?php endforeach;    ?>

    </tbody>
</table>
<script src="<?= WEBROOT ?>/js/transaction.js"></script>