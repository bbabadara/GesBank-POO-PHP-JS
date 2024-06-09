

                <div class="col-md-5 mb-3 mt-5 d-flex align-items-center">
                    <label for="inputCity" class="form-label  mx-2">Client</label>
                    <input type="text" class="form-control" id="inputClient">
                </div>
                <table class="table table-hover">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Client</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Date Creation</th>
                            <th scope="col">Numero</th>
                            <th scope="col">solde</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $data->prenom . " " . $data->nom ?></td>
                                <td><?= $data->telephone ?> </td>
                                <td><?= $data->dateCrea ?></td>
                                <td><?= $data->numero ?></td>
                                <td><?= $data->solde ?></td>
                                <td>Actions</td>
                            </tr>
                        <?php endforeach;    ?>

                    </tbody>
                </table>
          
<script src="<?=WEBROOT?>/js/compte.js"></script>
