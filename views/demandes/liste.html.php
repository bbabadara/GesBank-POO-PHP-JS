
            <div class="container w-100">
            <?php if ($_SESSION["user"]["libp"]=="Client"):?>
                    <h2>Mes demandes</h2>
                    <?php else: ?>
                        <h2>Toutes les demandes</h2>
                    <?php endif?>
                <div class="container col-12 mt-3 border shadow d-flex align-items-center justify-content-around p-3 rounded">
                <?php if ($_SESSION["user"]["libp"]=="CC"||$_SESSION["user"]["libp"]=="RG"):?>
                <div class="col-md-3 d-flex align-items-center">
                        <label for="inputCity" class="form-label  mx-2">Tel</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <?php endif?>
                    <div class="col-md-4 d-flex d-flex align-items-center">
                        <label for="inputTc" class="form-label  mx-2">Type</label>
                        <select id="inputTc" class="form-select">
                            <option value="all">Tout</option>
                            <option value="Compte Courant">Compte Courant</option>
                            <option value="Compte Épargne">Compte Épargne </option>
                            <option value="Compte Entreprise">Compte Entreprise</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <label for="inputState" class="form-label mx-2">Statut</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <table class="table mt-5 table-hover">
                    <thead class="table-info">
                        <tr>
                            <th scope="col"><input type="checkbox" id="selAll" onclick="selectAll(this)"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Client</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Statut</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $data->dated ?></td>
                                <td><?= $data->prenom . " " . $data->nom ?></td>
                                <td><?= $data->telephone ?> </td>
                                <td><?= $data->email ?></td>
                                <td><?= $data->libtc ?></td>
                                <td>Statut</td>
                            </tr>
                        <?php endforeach;    ?>

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination" id="pagination">
                        <!-- <li class="page-item"><button class="page-link" href="#">Previous</button></li>
                        <li class="page-item"><button class="page-link">1</button></li>
                        <li class="page-item"><button class="page-link">2</button></li>
                        <li class="page-item"><button class="page-link">3</button></li>
                        <li class="page-item"><button class="page-link" href="#">Next</button></li> -->
                    </ul>
                </nav>

            </div>
    <script src="<?=WEBROOT?>/js/controllers/demande.js" type="module"></script>
