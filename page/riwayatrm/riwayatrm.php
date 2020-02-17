<?php

$rows = query('SELECT * FROM siswa INNER JOIN rekam_medis ON siswa.no_rekammedis = rekam_medis.no_rekammedis');
?>
<a href="index.php?page=riwayatrm&aksi=cetak" target="_blank" class="btn btn-primary">Cetak Data</a>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="box box-success box-solid">
            <div class="box-header with-border">
               <h3 align="center">Data Rekam Medis</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>No rekam medis</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>kelas</th>
                                <th>Jurusan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Pemeriksa</th>
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
				                                            <td><?=$i?></td>
				                                        <td><?=$row['tanggal']?></td>
				                                        <td><?=$row['no_rekammedis']?></td>
						                                <td><?=$row['nama']?></td>
						                                <td><?=$row['jenis_kelamin']?></td>
						                                <td><?=$row['kelas']?></td>
						                                <td><?=$row['jurusan']?></td>
						                                <td><?=$row['keluhan']?></td>
						                                <td><?=$row['tindakan']?></td>
						                                <td><?=$row['pemeriksa']?></td>

						                            </tr>
						                            <?php $i++;?>
						                            <?php endforeach;?>
                        </tbody>

                    </table>
                </div>




            </div>
        </div>

    </div>
</div>