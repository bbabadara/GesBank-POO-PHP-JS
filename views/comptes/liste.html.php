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
    <h1>HELLO</h1>
<input type="text" id="inputTest">
    <main>
        <div class="container-fluid col-12 d-flex vh-100 ">
        <?php require_once "../views/partials/menu.html.php"; ?>
                    <div class="container col-10">
                <table class="table">
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
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="http://127.0.0.1:8010/js/compte.js"></script>
</body>

</html>