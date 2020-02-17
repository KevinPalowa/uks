<?php

if (isset($_POST['submit'])) {
    $rfid = $_POST['rfid'];
    header('Location: index.php?page=topup&rfid=' . $rfid);
}
if (isset($_GET['rfid'])) {
    $rfid = $_GET['rfid'];
    $data = query("SELECT * FROM siswa WHERE no_rfid = $rfid");
    $data = $data[0];
    if (mysqli_affected_rows($conn) == 1) {
        ?>
<script>
    $(document).ready(function() {
        $(".rfid").hide();
    });
</script>
<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
        <tr>
            <th>No RFID</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $data['no_rfid'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['kelamin'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td>Rp. <?= $data['saldo'] ?></td>

    </tbody>
</table>

<form action="" method="post">
    <div class="form-group col-md-4">
        <input type="number" required min="0" step="5000" name="saldo" class="inputsaldo form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" autocomplete="off" placeholder="masukan saldo">
        <input type="submit" class="btn btn-primary mt-3" onclick="confirm('Apakah anda yakin?')" name="submit2">
    </div>
</form>
<?php
    }

    if (isset($_POST['submit2'])) {

        $saldo = intval($_POST['saldo']);
        $rfid = $_GET['rfid'];
        $tanggal = date('Y-m-j');
        $saldoawal = query("SELECT * FROM siswa WHERE no_rfid = '$rfid'  ");
        $saldoawal = intval($saldoawal[0]['saldo']);
        $totalsaldo = $saldo + $saldoawal;
        mysqli_query($conn, "UPDATE  siswa SET saldo='$totalsaldo' where no_rfid='$rfid'");
        mysqli_query($conn, "INSERT INTO isi_saldo VALUES('', '$rfid', '$saldo', '$tanggal')");
        if (mysqli_affected_rows($conn) == 1) {
            header('Location:index.php?page=topup&status=berhasil');
        } else {
            header('Location:index.php?page?=toup&status=berhasil');
        }
    }
}
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == 'berhasil') {
        echo "<script>Swal.fire({
            type: 'success',
            title: 'Topup Berhasil!',
          })</script>";
    }
    if ($status == 'gagal') {
        echo "<script>Swal.fire({
            type: 'error',
            title: 'Topup Gagal!',
          })</script>";
    }
}
?>
<form action="" method="post">
    <input type="number" class="rfid" name="rfid" id="rfid" autocomplete="off" autofocus>
    <input type="submit" hidden value="ok" name="submit">
</form>