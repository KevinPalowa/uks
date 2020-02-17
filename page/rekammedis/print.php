<?php
require_once 'C:\xampp\htdocs\uks\vendor\autoload.php';
ob_clean();
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
//     $rfid = $_GET['id'];
//     $data = query("SELECT * FROM siswa WHERE no_rfid = $rfid");
//     $data = $data[0];
//         $rekammedis = $data['no_rekammedis'];
//         $query = "SELECT * FROM rekam_medis WHERE no_rekammedis = '$rekammedis'";
//         $rows = query($query);
//         $tanggal = date('Y');
//         $tanggal2 = explode("-", $data['ttl']);
//         $umur = $tanggal - intval($tanggal2[0]);

// $html = '<table class="table table-bordered">
// <tr>
//     <td colspan="2" class="bg-primary text-center text-white"><b>Data Pasien</b></td>
// </tr>
// <tr>
//     <th>Nama</th>
//     <td>'.$data['nama'].'</td>
// </tr>
// <tr>
//     <th>Kelas</th>
//     <td>'.$data['kelas'].'</td>
// </tr>
// <tr>
//     <th>Tanggal lahir</th>
//     <td>'.$data['ttl'].'</td>
// </tr>
// <tr>
//     <th>Kelamin</th>
//     <td>'.$data['jenis_kelamin'] == "L" ? 'Laki - laki' : "Perempuan" .'</td>
// </tr>
// <tr>
//     <th>Jurusan</th>
//     <td>'.$data['jurusan'].'</td>
// </tr>
// <tr>
//     <th>Umur</th>
//     <td>'.$umur.'</td>
// </tr>
// <tr>
//     <th>Riwayat alergi</th>
//     <td>'.$data['riwayat_alergi'].'</td>
// </tr>
// </table>';

// $html=
// Write some HTML code:
$mpdf->WriteHTML('oke');

// Output a PDF file directly to the browser
$mpdf->Output("data rekam medis", "I");
