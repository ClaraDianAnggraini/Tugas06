<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-6">
         <h1>From Registrasi</h1>
         <p>Isi Data Dibawah ini:</p>
        <form action= "Tugas06proses.php" method="post">
        <div class="mb-3">
        <!-- <label for="nama" class="form-label">Nama </label> <input type="text" name="nama" placeholder="Nama Anda"> -->
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" 
            placeholder="Nama Anda" required>
        </div>
        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
        </div>
        </div>
        <div class="mb-3">
        <!-- <label for="temlah" class="form-label">Tempat Lahir</label> <input type="text" class="form-label" name="temlah" id="temlah" placeholder="Tempat Lahir"> -->
            <div class="mb-3">
            <label for="temlah" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="temlah" id="temlah" 
            placeholder="Tempat Lahir" required>
        </div>
        <div class="mb-3">
            <!-- Tanggal Lahir <input type="text" class="form-label" name="tanglah" id="tanglah"> -->
            <label for="tanglah" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanglah" id="tanglah" 
            placeholder="Tanggal Lahir" required>
        </div>
        <div class="mb-3">
            Jenis Kelamin <input type="radio" name= "jk" value="Laki-laki">Laki-laki <input type="radio" name= "jk" value="Perempuan">Perempuan 
        <!-- <label for="jk" class="form-label">Jenis Kelamin</label>
        <div class="mb-2">
            <input class="form-input" type="radio" name="jk" id="jk" placeholder="Jenis Kelamin" required>
            <label class="form-label" for="jk">Laki-laki</label>
        </div>
        <div class="mb-2">
            <input class="form-input" type="radio" name="jk" id="jk" placeholder="Jenis Kelamin" required>
            <label class="form-label" for="jk">Perempuan</label > -->
        </div>
        <div class="mb-3">
            <label for="pdk" class="form-label">Pendidikan</label>
                <select name="pdk" class="form-label" aria-label="Default select example" onchange="this.form.submit()" required>
                    <option selected>Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
            </select>
        </div>
        </div>
        <div>
        <Button type="submit" class="btn btn-primary">Submit</Button> 
        <Button type="reset" class="btn btn-default">Cancel</Button>
        </div>
        </Form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 