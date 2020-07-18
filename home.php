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
    <br><br>

    <div class="container">
        <br>
        <div class="text-center">
            <h2>Sistem Pemilihan Kost</h2>
        </div>

        <br>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 centered">
                <form method="POST" action="proses-tambah.php">

                    <p>Nama Kost</p>
                    <input type="text" class="form-control" name="nama">
                    <br>
                    <p>Harga / Tahun</p>
                    <select type="text" class="form-control" name="harga">
                        <option value="1"> <?= "< 2.000.000" ?></option>
                        <option value="2">2.000.000 - 2.500.000</option>
                        <option value="3">2.500.000 - 3.000.000</option>
                        <option value="4">3.000.000 - 3.500.000</option>
                        <option value="5">3.500.000 - 4.000.000</option>
                        <option value="6">4.000.000 - 4.600.000</option>
                        <option value="7">4.500.000 - 5.000.000</option>
                        <option value="8"><?= "> 5.000.000" ?></option>
                    </select>
                    <br>
                    <p>Jarak dari Kampus</p>
                    <select type="text" class="form-control" name="jarak">
                        <option value="1"> <?= "< 500 m" ?></option>
                        <option value="2">500 m - 1 km</option>
                        <option value="3">1 km - 2 km</option>
                        <option value="4">2 km - 3.km</option>
                        <option value="5">3 km - 4 km</option>
                        <option value="6">4 km - 5 km</option>
                        <option value="7"><?= "> 5 km" ?></option>
                    </select>
                    <br>
                    <p>Kamar Mandi Dalam</p>
                    <select type="text" class="form-control" name="km">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    <br>
                    <p>Tersedia Wifi</p>
                    <select type="text" class="form-control" name="wifi">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Tambah</button>

                </form>
            </div>
        </div>
    </div>


</body>

</html>