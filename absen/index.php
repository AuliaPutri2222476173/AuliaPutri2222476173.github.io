<?php
include_once("koneksi.php");

// Mengambil semua data dari database
$result = mysqli_query($mysqli, "SELECT * FROM absensi ORDER BY id DESC");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Insert data ke database
    $add = mysqli_query($mysqli, "INSERT INTO absensi(nama,jurusan,waktu_kehadiran) VALUES('$nama','$jurusan', NOW())");
}
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstra@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" intergrity="sha384-1BmE4kWBq7

    <title>Aulia Putri</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <center><span class="navbar-brand mb-0 h1">AULIA PUTRI</span></center>
        </div>
    </nav>

    <div class="bg-success p-2 text-dark bg-opacity-10">
    <center><h1><b><marquee bgcolor="pink" width="400">DAFTAR HADIR MAHASISWA</marquee></b></h1></center>
    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT43u_emzyCwI94Ku15h_VCOwg-QG8Sgx9L9A&s" width="300"></center>
        
    <div class="container">
            <form action="" method="post" name="form_absen">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <center><label class="form-label">Nama</label></center>
                        <center><input type="text" class="form-control" name="nama" placeholder="Masukan Nama"></center>
                    </div>
                    <div class="mb-3">
                    <center><label class="from-label">Jurusan</label></center>
                    <center><input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan"></center>
                    </div>     
         <div class="text-center">
                <center><button type="reset" class="btn btn-danger" name="Reset">Reset</button></center>
                <center><button type="submit" class="btn btn-primary" name="Submit">Hadir</button></center>
        </div> 
    </form> 
    
    <center><table class="my-5 table table-striped"></center>
    <h2 class=<tr class="table-dark"></h2>
        <th bgcolor="pink">Nama</th>
        <th bgcolor="pink">Jurusan</th>
        <th bgcolor="pink">Waktu Kehadiran</th>
        </tr>

        <?php
        while ($r = mysqli_fetch_array($result)) {
        ?>
                <tr class="table-primary">
                    <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['jurusan']; ?></td>
                    <td><?php echo $r['waktu_kehadiran']; ?></td>
                </tr>
        <?php
        }
        ?>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0G1n4gmtz2M1Qnik">
</body>
</html>
