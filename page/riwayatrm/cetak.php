<?php
// Require composer autoload
echo BASEURL;
// die();
ob_clean();
require_once 'C:\xampp\htdocs\uks\vendor\autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$rows = query('SELECT * FROM siswa INNER JOIN rekam_medis ON siswa.no_rekammedis = rekam_medis.no_rekammedis');



$html= '
           <h3 align="center">Data Rekam Medis</h3>
                <table border="1">
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
                    <tbody>';

                $i = 1;
                     foreach ($rows as $row):
$tanggal = date("Y");
$tanggal2 = explode("-", $row['ttl']);
$umur = $tanggal - intval($tanggal2[0]);


$html .= "<tr>
<td>".$i."</td>
<td>".  $row['tanggal']."</td>
<td>".  $row['no_rekammedis']."</td>
<td>".  $row['nama']."</td>
<td>".  $row['jenis_kelamin']."</td>
<td>".  $row['kelas']."</td>
<td>".  $row['jurusan']."</td>
<td>".  $row['keluhan']."</td>
<td>".  $row['tindakan']."</td>
<td>".  $row['pemeriksa']."</td>
</tr>";
                                           
                                             $i++;
                                            endforeach;
            $html .="</tbody>
            </table>";

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data rekam medis","I");
