
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Date </th>
                            <th scope="col">Montant</th>
                            <th scope="col">Client</th>
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
                                <td><?= $data->type ?></td>
                                <td>Actions</td>
                            </tr>
                        <?php endforeach;    ?>

                    </tbody>
                </table>
            
   
    <script src="<?=WEBROOT?>/js/recu.js"></script>
