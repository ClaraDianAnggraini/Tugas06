<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas06</title>
</head>
<body>
    <h1>Data Registrasi</h1>
    <?php
error_reporting(0);
$nama= $_POST['nama'] ;
$alamat= $_POST['alamat'] ;
$temlah= $_POST['temlah'];
$tanglah= $_POST['tanglah'];
$jk= $_POST['jk'];
$pdk= $_POST['pdk'];

// if(!empty($nama) && !empty($alamat) && !empty($temlah) && !empty($tanglah) && !empty($jk) && !empty($pdk)) {?>
<div class= "row">
<div class="col-6">
<table class="table table-dark table-hover" action="Tugas06.php">
    <table border=1 width= "90%">
    <tr>
        <td>Nama</td> <td><?php echo $nama ?><td>
    </tr>
    <tr>
        <td>Alamat</td> <td><?php echo $alamat ?><td>
    </tr>
    <tr>
        <td>Tempat Lahir</td> <td><?php echo $temlah ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td> <td><?php echo $tanglah ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td> <td><?php echo $jk ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td> <td><?php echo $pdk ?></td> 
    </tr>
    </table>
</table>
    <br><a href="Tugas06.php">INPUT DATA LAGI</a>                    
<div> 
</div>
</body>
</html>