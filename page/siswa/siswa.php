<?php

$rows = query('SELECT * FROM siswa ');
?>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="box box-success box-solid">
            <div class="box-header with-border">
               <h3 align="center">Data Pasien</h3> 
            </div>
            <div class="panel-body">
                <class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No rfid</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelamin</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Umur</th>

                                <th>Riwayat Alergi</th>
                                <th>No Rekam Medis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($rows as $row):
    $tanggal = date("Y");
    $tanggal2 = explode("-", $row['ttl']);
    $umur = $tanggal - intval($tanggal2[0]);
    ?>
                                <tr>
                                    <td><?=$row['no_rfid']?></td>
                                    <td><?=$row['nama']?></td>
                                    <td><?=$row['ttl']?></td>
                                    <td><?=$row['jenis_kelamin']?></td>
                                    <td><?=$row['kelas']?></td>
                                    <td><?=$row['jurusan']?></td>
                                    <td><?=$umur?></td>
                                    <td><?=$row['riwayat_alergi']?></td>
                                    <td><?=$row['no_rekammedis']?></td>
                                    <td>
                                        <a href="?page=siswa&aksi=ubah&id=<?php echo $row['no_rfid']; ?>"
                                            class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                        <button onclick="konfirmasi(<?php echo $row['no_rfid']; ?>)"
                                        
                                            class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>

                                    </td>

                                </tr>
                                <?php $i++;?>
                                <?php endforeach;?>
                        </tbody>

                    </table>
                </div>

                <a href="?page=siswa&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i
                        class="fa fa-plus"></i> Tambah </a>


            </div>
        </div>

    </div>
</div>

</script>