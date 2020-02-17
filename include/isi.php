<?php

// ini_set('display_errors', 0);
$page = $_GET['page'];
$aksi = $_GET['aksi'];
# code...
if ($page == 'siswa') {
    if ($aksi == '') {
        include "page/siswa/siswa.php";
    } elseif ($aksi == 'tambah') {
        include "page/siswa/tambah.php";
    } elseif ($aksi == 'ubah') {
        include "page/siswa/ubah.php";
    } elseif ($aksi == 'hapus') {
        include "page/siswa/hapus.php";
    }
}

if ($page == 'rekammedis') {
    if ($aksi == '') {
        include "page/rekammedis/rekammedis.php";
    } elseif ($aksi == 'tambah') {
        include "page/rekammedis/tambah.php";
    } elseif ($aksi == 'ubah') {
        include "page/rekammedis/ubah.php";
    } elseif ($aksi == 'hapus') {
        include "page/rekammedis/hapus.php";
    }
}

if ($page == 'riwayatrm') {
    if ($aksi == '') {
        include "page/riwayatrm/riwayatrm.php";
    } elseif ($aksi == 'cetak') {
        include "page/riwayatrm/cetak.php";
    }
}

if ($page == '') {
    include "page/home.php";
}

if ($page == 'chart') {
    include "page/chart.php";
}
