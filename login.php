<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <form action="/aksi.php">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <select name="jenis_kelamin" >
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>    
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <!-- Horizontal Form -->
    <!-- Horizontal Form menampilkan formulir dengan gaya label dan kontrol form dibuat
    secara horizontal, label diletakkan di samping kontrol form, hal ini khusus untuk layar
    besar dan sedang, sedangkan untuk layar kecil akan diubah ke bentuk vertical form
    yaitu label ditempatkan di atas kontrol form. -->
    <div class="container">
        <form class="form-horizontal" action="/aksi.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter
                Username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn
                btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Inline Form -->
    <!-- Inline form atau formulir sebaris, menampilkan semua elemen formulir dalam satu
    baris, rata kiri, label berada di samping kontrol form.
    Inline form hanya berlaku untuk layar dengan minimal lebar 768px.
    Aturan tambahan untuk Inline Form adalah tambahkan class .form-inline ke
    elemen <form> -->
    <br>
    <div class="container">
        <form class="form-inline" action="/aksi.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


</body>

</html>