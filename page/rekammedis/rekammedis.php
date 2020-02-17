<?php

if (isset($_POST['submit'])) {
    $rfid = $_POST['rfid'];
    header('Location: index.php?page=rekammedis&id=' . $rfid);
}

if (isset($_GET['id'])) {
    $rfid = $_GET['id'];
    $data = query("SELECT * FROM siswa WHERE no_rfid = $rfid");
    $data = $data[0];
    if (mysqli_affected_rows($conn) > 0) {
        $rekammedis = $data['no_rekammedis'];
        $query = "SELECT * FROM rekam_medis WHERE no_rekammedis = '$rekammedis'";
        $rows = query($query);
        ?>
<script>
    $(document).ready(function () {
        $(".rfid").hide();
    });
</script>
<?php

        $tanggal = date('Y');
        $tanggal2 = explode("-", $data['ttl']);
        $umur = $tanggal - intval($tanggal2[0]);
        ?>

        <form action="page/laporan/laporan.php?id=<?=$rfid?>" method="post">
        <input type="hidden" name="id" value="<?=$data['no_rekammedis'];?>">
        <input type="submit" target="_blank" class="btn btn-primary" value="Cetak Data">
        </form>
<table class="table table-bordered">
    <tr>
        <td colspan="2" class="bg-primary text-center text-white"><b>Data Pasien</b></td>
    </tr>
    <tr>
        <th>Nama</th>
        <td><?=$data['nama']?></td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td><?=$data['kelas']?></td>
    </tr>
    <tr>
        <th>Tanggal lahir</th>
        <td><?=$data['ttl']?></td>
    </tr>
    <tr>
        <th>Kelamin</th>
        <td><?php echo $data['jenis_kelamin'] == "L" ? 'Laki - laki' : "Perempuan" ?></td>
    </tr>
    <tr>
        <th>Jurusan</th>
        <td><?=$data['jurusan']?></td>
    </tr>
    <tr>
        <th>Umur</th>
        <td><?=$umur?></td>
    </tr>
    <tr>
        <th>Riwayat alergi</th>
        <td><?=$data['riwayat_alergi']?></td>
    </tr>
</table>

<a href="?page=rekammedis&aksi=tambah&id=<?=$data['no_rfid']?>" class="btn btn-success" style="margin-top: 8px;"><i
                        class="fa fa-plus"></i> Tambah </a>

<h3 class="text-center mt-4">Riwayat Rekam medis siswa</h3>

<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>No rekam medis</th>
            <th>Keluhan</th>
            <th>Suspek Diagnosa</th>
            <th>tindakan</th>
            <th>Terapi</th>
            <th>Tanggal</th>
            <th>Jam</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach ($rows as $row):
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['no_rekammedis']?></td>
            <td><?=$row['keluhan']?></td>
            <td><?=$row['diagnosa']?></td>
            <td><?=$row['tindakan']?></td>
            <td><?=$row['obat']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['jam']?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </tbody>

</table>

<table class="table table-striped table-bordered table-hover" id="DataTable">

    <tbody>

        <?php foreach ($rows as $row): ?>


        <?php endforeach;?>
    </tbody>
</table>


<?php
} else {
        echo swal('error', 'Gagal!', 'Data Tidak di temukan!', 'index.php?page=rekammedis', 'false');
    }

}
?>
<form action="" method="post">
    <input type="number" class="rfid" name="rfid" id="rfid" autocomplete="off" autofocus>
    <input type="submit" hidden value="ok" name="submit">
</form>