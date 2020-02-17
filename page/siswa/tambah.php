<?php
if (isset($_POST['submit'])) {

    $norfid = $_POST['no_rfid'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $riwayatalergi = $_POST['riwayat_alergi'];
    $rekammedis = rekam_medis();
    $query = "INSERT INTO siswa VALUES('$norfid','$nama', '$ttl', '$kelamin','$kelas','$jurusan','$riwayatalergi', '$rekammedis')
            ";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) == 1) {
        echo swal('success', 'Berhasil!', 'Data siswa berhasil di masukan!', 'index.php?page=siswa', 'false');
    } else {
        echo mysqli_error($conn);

    }
}
?>
<div class="row">
    <div class="col-md-12">

        <form method="post" action="">

            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input required type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" autocomplete="off" >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input required type="date" name="ttl" class="form-control" id="exampleInputPassword1" placeholder="tempat tanggal lahir" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="P">Perempuan</option>
                    <option value="L">Laki-laki</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Kelas/Guru/Karyawan</label>
                <select name="kelas" class="form-control">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                    <option value="Guru">Guru</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="akuntansi">Akuntansi</option>
                    <option value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
                    <option value="Desain Komunikasi dan Visual">Desain Komunikasi dan Visual</option>
                    <option value="Guru">Guru</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Manajemen Perhotelan">Manajemen Perhotelan</option>
                    <option value="Sistem Informasi Jaringan dan Aplikasi">Sistem Informasi Jaringan dan Aplikasi</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>



            <div class="form-group">
                <label for="exampleInputPassword1">Riwayat Alergi</label>
                <input required type="text" name="riwayat_alergi" class="form-control" id="exampleInputPassword1" placeholder="Riwayat Alergi" autocomplete="off">
            </div>


        <div class="form-group">
                <label for="exampleInputPassword1">No rfid</label>
                <input required type="number" name="no_rfid" class="form-control" id="exampleInputPassword1" placeholder="No rfid" autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
