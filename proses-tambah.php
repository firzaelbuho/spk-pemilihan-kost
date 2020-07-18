<?php

session_start();

//ambil data
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jarak = $_POST['jarak'];
$km = $_POST['km'];
$wifi = $_POST['wifi'];


//normalisasi
$bobot_harga = 1 / $harga * 0.3;
$bobot_jarak = 1 / $jarak * 0.3;
$bobot_km =  $km / 1 * 0.2;
$bobot_wifi =  $wifi / 1 * 0.2;

//assign string ke atribut
$harga = cek_harga($harga);
$jarak = cek_jarak($jarak);
$km = cek_km($km);
$wifi = cek_wifi($wifi);

//hitung bobot total
$bobot_total = $bobot_harga + $bobot_jarak + $bobot_km + $bobot_wifi;

//tambah ke session db

array_push($_SESSION['db'], array(
    'nama' => $nama,
    'bobot' => $bobot_total,
    'harga' => $harga,
    'jarak' => $jarak,
    'km' => $km,
    'wifi' => $wifi
));
//var_dump($_SESSION['db']);
//print_r(count($_SESSION['db']));

//urutkan

urutkan();
header("location:hasil.php");
//fungsi mengurutkan




function urutkan()
{
    for ($i = 0; $i < (count($_SESSION['db'])); $i++) {
        // echo $_SESSION['db'][$i]['nama'];

        for ($j = $i + 1; $j < count($_SESSION['db']); $j++) {


            if ($_SESSION['db'][$j]['bobot'] > $_SESSION['db'][$i]['bobot']) {

                //swap
                $temp = $_SESSION['db'][$j];
                $_SESSION['db'][$j] = $_SESSION['db'][$i];
                $_SESSION['db'][$i] = $temp;
            }
        }
    }
}

function cek_harga($x)
{
    switch ($x) {
        case 1:
            return "< 2.000.000";
            break;
        case 2:
            return "2.000.000 - 2.500.000";
            break;
        case 3:
            return "2.500.000 - 3.000.000";
            break;
        case 4:
            return "3.000.000 - 3.500.000";
            break;
        case 5:
            return "3.500.000 - 4.000.000";
            break;
        case 6:
            return "4.000.000 - 4.500.000";
            break;
        case 7:
            return "4.500.000 - 5.000.000";
            break;
        case 8:
            return "> 5.000.000";
            break;
        default:
    }
}

function cek_jarak($x)
{
    switch ($x) {
        case 1:
            return "< 500 m";
            break;
        case 2:
            return "500 m - 1 km";
            break;
        case 3:
            return "1 km - 2 km";
            break;
        case 4:
            return "2 km - 3 km";
            break;
        case 5:
            return "3 km - 4 km";
            break;
        case 6:
            return "4 km - 5 km";
            break;
        case 7:
            return "> 5 km";
            break;
        default:
    }
}

function cek_km($x)
{
    switch ($x) {
        case 1:
            return "Ya";
            break;
        case 0:
            return "Tidak";
            break;
        default:
    }
}

function cek_wifi($x)
{
    switch ($x) {
        case 1:
            return "Ya";
            break;
        case 0:
            return "Tidak";
            break;
        default:
    }
}
