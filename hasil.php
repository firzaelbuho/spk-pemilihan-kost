<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pemilihan Kost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body>
    <br>

    <div class="container ">
        <br><br>
        <div class="text-center">
            <h2>Sistem Pemilihan Kost</h2>
        </div>
        <div class="row">
            <div class="col-12 centered">
                <br>
                <br>
                <a href="home.php" class="btn btn-primary">+ Tambah</a>
                <br> <br>
                <h3>Rekomendasi Kost Terbaik</h3>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Kos</th>
                            <th scope="col">Harga / Th</th>
                            <th scope="col">Jarak dari kampus</th>
                            <th scope="col">Kamar mandi dalam</th>
                            <th scope="col">Wifi</th>
                            <th scope="col">Bobot Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $_SESSION['db'][0]['nama'] ?></th>
                            <td><?= $_SESSION['db'][0]['harga'] ?></td>
                            <td><?= $_SESSION['db'][0]['jarak'] ?></td>
                            <td><?= $_SESSION['db'][0]['km'] ?></td>
                            <td><?= $_SESSION['db'][0]['wifi'] ?></td>
                            <td><?= $_SESSION['db'][0]['bobot'] ?></td>
                        </tr>

                    </tbody>
                </table>
                <br>
                <br>
                <h3>Pilihan Alternatif</h3>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Kos</th>
                            <th scope="col">Harga / Th</th>
                            <th scope="col">Jarak dari kampus</th>
                            <th scope="col">Kamar mandi dalam</th>
                            <th scope="col">Wifi</th>
                            <th scope="col">Bobot Nilai</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 1; $i < count($_SESSION['db']); $i++) { ?>
                            <tr>
                                <th scope="row"><?= $_SESSION['db'][$i]['nama'] ?></th>
                                <td><?= $_SESSION['db'][$i]['harga'] ?></td>
                                <td><?= $_SESSION['db'][$i]['jarak'] ?></td>
                                <td><?= $_SESSION['db'][$i]['km'] ?></td>
                                <td><?= $_SESSION['db'][$i]['wifi'] ?></td>
                                <td><?= $_SESSION['db'][$i]['bobot'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</body>

</html>