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
        <?php require_once "../views/partials/menu.html.php"?>
            <div class="container w-100">
                <div class="container col-12 mt-3 border shadow d-flex align-items-center justify-content-around p-3 rounded">
                    <div class="col-md-3 d-flex align-items-center">
                        <label for="inputCity" class="form-label  mx-2">Tel</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="col-md-4 d-flex d-flex align-items-center">
                        <label for="inputTc" class="form-label  mx-2">Type</label>
                        <select id="inputTc" class="form-select">
                            <option value="all">Tout</option>
                            <option value="Compte Courant">Compte Courant</option>
                            <option value="Compte Épargne">Compte Épargne	</option>
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
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><button class="page-link" >1</button></li>
    <li class="page-item"><button class="page-link" >2</button></li>
    <li class="page-item"><button class="page-link" >3</button></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="http://127.0.0.1:8010/js/demande.js"></script>
</body>

</html>