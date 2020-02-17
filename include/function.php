<?php
$conn = mysqli_connect('localhost', 'root', '', 'uks');
// CONST BASEURL = $_SERVER['']
$url = $_SERVER['HTTP_HOST'];
define("BASEURL", $url);
// echo BASEURL;
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;

}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }
    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }
    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }
    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/kantin' . $namaFileBaru);
    return $namaFileBaru;
}

function rekam_medis()
{
    $rmedis = query("SELECT no_rekammedis FROM siswa order by no_rekammedis desc limit 1");
    $rmedis = $rmedis[0]['no_rekammedis'];
    $rmedis = intval(substr($rmedis, 5)) + 1;

    $rekammedis = "UKS" . date('y');
    $rekammedis .= "0" . $rmedis;
    return $rekammedis;
}

function chart($labels, $data, $tipe)
{
    $labels = explode(",", $labels);
    $label2 = "";
    foreach ($labels as $label) {
        $label2 .= "'" . $label . "',";
    }

    $data = explode(",", $data);
    $data2 = "";
    foreach ($data as $data3) {
        $data2 .= $data3 . ",";
    }

    $result = "<div class='chart-container' style='position: relative; height:40vh; width:80vw'>
    <canvas id='myChart'></canvas>
</div><script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: '".$tipe."',
    data: {
        labels: [" . $label2 . "],
        datasets: [{
            label: 'Total',
            data: [" . $data2 . "],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>";
    return $result;
}

function swal($icon, $title ,$text, $link, $cancel){
    
      return "<script>Swal.fire({
        title: '".$title."',
        text: '".$text."',
        icon: '".$icon."',
        showCancelButton: ".$cancel.",
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.value) {
          window.location.href='".$link."'
        }
      })
      </script>";

}

