<?php
// memanggil library FPDF
require 'fpdf.php';
$id = $_GET['id'];
$connect = mysqli_connect('localhost', 'root', '', 'uks');
$mahasiswa = mysqli_query($connect, "SELECT * FROM siswa WHERE no_rfid = '$id'");

// intance object dan memberikan pengaturan halaman PDF
$data = mysqli_fetch_assoc($mahasiswa);
$rekammedis = $data['no_rekammedis'];
$tanggal = date('Y');
$tanggal2 = explode("-", $data['ttl']);
$umur = $tanggal - intval($tanggal2[0]);
$siswa = mysqli_query($connect, "SELECT * FROM rekam_medis INNER JOIN siswa ON rekam_medis.no_rekammedis=siswa.no_rekammedis WHERE rekam_medis.no_rekammedis ='$rekammedis'");
$pdf = new FPDF('p', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(0, 7, 'SMK PARIWISATA METLAND', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 7, 'DAFTAR REKAM MEDIS ', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->Cell(40, 7, 'Nama', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['nama'], 0, 1, 'L');

$pdf->Cell(40, 7, 'No rekam medis', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['no_rekammedis'], 0, 1, 'L');

$pdf->Cell(40, 7, 'Kelas', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['kelas'], 0, 1, 'L');

$pdf->Cell(40, 7, 'Tanggal lahir', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['ttl'], 0, 1, 'L');

$pdf->Cell(40, 7, 'Kelamin', 0, 0, 'L');
$pdf->Cell(0, 7, $data['jenis_kelamin'] == "L" ? ': Laki - laki' : ": Perempuan", 0, 1, 'L');
$pdf->Cell(40, 7, 'Jurusan', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['jurusan'], 0, 1, 'L');
$pdf->Cell(40, 7, 'Umur', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $umur, 0, 1, 'L');
$pdf->Cell(40, 7, 'Riwayat alergi', 0, 0, 'L');
$pdf->Cell(0, 7, ": " . $data['riwayat_alergi'], 0, 1, 'L');
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetLeftMargin(18);
$pdf->Cell(10, 6, 'No', 1, 0);
$pdf->Cell(27, 6, 'TINDAKAN', 1, 0);
$pdf->Cell(30, 6, 'KELUHAN', 1, 0);
$pdf->Cell(27, 6, 'DIAGNOSA', 1, 0);
$pdf->Cell(27, 6, 'OBAT', 1, 0);
$pdf->Cell(27, 6, 'TANGGAL', 1, 0);
$pdf->Cell(27, 6, 'PEMERIKSA', 1, 1);

$pdf->SetFont('Arial', '', 10);
$i = 1;
while ($row = mysqli_fetch_array($siswa)) {
    $pdf->Cell(10, 6, $i++, 1, 0);
    $pdf->Cell(27, 6, $row['tindakan'], 1, 0);
    $pdf->Cell(30, 6, $row['keluhan'], 1, 0);
    $pdf->Cell(27, 6, $row['diagnosa'], 1, 0);
    $pdf->Cell(27, 6, $row['obat'], 1, 0);
    $pdf->Cell(27, 6, $row['tanggal'], 1, 0);
    $pdf->Cell(27, 6, $row['pemeriksa'], 1, 1);
}
ob_end_clean();
$pdf->Output("I", "Data siswa");
