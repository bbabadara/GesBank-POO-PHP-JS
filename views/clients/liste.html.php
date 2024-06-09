
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $data->nom ?></td>
                                <td><?= $data->prenom ?></td>
                                <td><?= $data->telephone ?> </td>
                                <td><?= $data->email ?></td>
                            </tr>
                        <?php endforeach;    ?>

                    </tbody>
                </table>
            
      <script src="<?=WEBROOT?>/js/client.js"></script>
