<?php
$id = $_GET['id'];
$penyakit = query("SELECT penyakit FROM penyakit ORDER BY penyakit ASC");
// $penyakit = $penyakit['penyakit'];
$rows = query("SELECT * FROM siswa WHERE no_rfid = $id");
$no_rekammedis = $rows[0]['no_rekammedis'];
if (isset($_POST['submit'])) {
    $tindakan = $_POST['tindakan'];
    $keluhan = $_POST['keluhan'];
    $diagnosa = $_POST['diagnosa'];
    $obat = $_POST['obat'];
    $tanggal = date("Y-m-d");
    $pemeriksa = $_POST['pemeriksa'];
    $jam = date("H.i");

    $query = "INSERT INTO rekam_medis VALUES('', '$no_rekammedis', '$tindakan', '$keluhan', '$diagnosa', '$obat', '$tanggal','$jam', '$pemeriksa')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) == 1) {
        echo swal('success', 'Berhasil!', 'Data rekam medis berhasil di masukan!', 'index.php?page=rekammedis&id=' . $id, 'false');
    } else {
        echo mysqli_error($conn);
    }
}

?>
<h3 class="text-center">Tambah Rekam Medis</h3>
<div class="row">
    <div class="col-md-12">

        <form method="post" action="">
        <div class="form-group">

        <div class="form-group">
            <label for="keluhan">keluhan</label>
                <input required type="text" name="keluhan" id="keluhan" class="form-control" autocomplete="off">
            </div>

            <label for="diagnosa">Suspek Diagnosa</label>
            <select name="diagnosa" id="diagnosa" class="form-control" autocomplete="off">

            <?php foreach ($penyakit as $p): ?>
                <option value="<?=$p['penyakit']?>"><?=$p["penyakit"]?></option>
            <?php endforeach?>
                </select>
            </div>

            <div class="form-group">
            <label for="tindakan">Tindakan</label>
                <input required type="text" name="tindakan" id="tindakan" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
            <label for="obat">Terapi</label>
                <input required type="text" name="obat" id="obat" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
            <label for="tanggal">pemeriksa</label>
                <input required type="text" name="pemeriksa" id="tanggal" class="form-control" autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
