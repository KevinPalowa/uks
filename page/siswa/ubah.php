<?php

$id = $_GET['id'];
$rows = query("SELECT * FROM siswa WHERE no_rfid = '$id' ");
$rows = $rows[0];
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $rfid = $_POST['rfid'];

    $query = "UPDATE  siswa SET no_rfid = '$rfid',nama='$nama',  jenis_kelamin='$kelamin', kelas='$kelas', jurusan='$jurusan' where no_rfid='$id' ";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) == 1) {
        echo swal('success', 'Berhasil!', 'Data siswa berhasil di ubah!', 'index.php?page=siswa', 'false');
    }else {
        echo mysqli_error($conn);
    }
}
?>
<div class="row">
    <div class="col-md-12">

        <form method="post" action="">
            <div class="form-group">
                <h2 class="text-center">Ubah Data</h2>
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" required name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $rows['nama'] ?>" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kelamin</label>
                <select name="kelamin" class="form-control">
                    <option <?php echo $rows['kelamin'] == "P" ? 'selected' : ""  ?> value="P">Perempuan</option>
                    <option <?php echo $rows['kelamin'] == "L" ? 'selected' : ""   ?> value="L">Laki-laki</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kelas</label>
                <select name="kelas" class="form-control">
                    <option <?php echo $rows['kelas'] == "X" ? 'selected' : ""   ?> value="X">X</option>
                    <option <?php echo $rows['kelas'] == "XI" ? 'selected' : ""   ?> value="XI">XI</option>
                    <option <?php echo $rows['kelas'] == "XII" ? 'selected' : ""   ?> value="XII">XII</option>
                    <option <?php echo $rows['kelas'] == "Guru" ? 'selected' : ""   ?> value="Guru">Guru</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option <?php echo $rows['jurusan'] == "Akuntansi" ? 'selected' : ""   ?> value="Akuntansi">Akuntansi</option>
                    <option <?php echo $rows['jurusan'] == "Sistem Informasi Jaringan dan Aplikasi" ? 'selected' : ""   ?> value="Sistem Informasi Jaringan dan Aplikasi">Sistem Informasi Jaringan dan Aplikasi</option>
                    <option <?php echo $rows['jurusan'] == "Multimedia" ? 'selected' : ""   ?> value="Multimedia">Multimedia</option>
                    <option <?php echo $rows['jurusan'] == "Guru" ? 'selected' : ""   ?> value="Guru">Guru</option>
                    <option <?php echo $rows['jurusan'] == "Manajemen Perhotelan" ? 'selected' : ""   ?> value="Manajemen Perhotelan">Manajemen Perhotelan</option>
                    <option <?php echo $rows['jurusan'] == "Akomodasi Perhotelan" ? 'selected' : ""   ?> value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
                    <option <?php echo $rows['jurusan'] == "Tata Boga" ? 'selected' : ""   ?> value="Tata Boga">Tata Boga</option>
                    <option <?php echo $rows['jurusan'] == "Desain Komunikasi dan Visual" ? 'selected' : ""   ?> value="Desain Komunikasi dan Visual">Desain Komunikasi dan Visual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">RFID</label>
                <input type="text" required name="rfid" class="form-control" id="exampleInputPassword1" placeholder="NO RFID" value="<?= $rows['no_rfid'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>