<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="form.css" rel="stylesheet">


 
</head>
<body>
<form method = "POST" action="formaksi.php">
    <div class="form">

            <h4 style="font-size: 1.5em; text-align: center;">Form Peminjaman Buku</h4>
            <div class="input-section">
                Nama<br>
                <input type="text" name="nama" required>
            </div>
            <div class="input-section">
                Alamat<br>
                <input type="text" name="alamat" required>
            </div>
            <div class="input-section">
                Lama Pinjam<br>
                <input type="text" name="lamaPinjam" required>
            </div>
            <div class="input-section">
                No Telepon<br>
                <input type="text" name="noTel" required>
            </div>
            <input type="submit" value="SAVE" class="buttonForm" onclick="alert('Terima kasih Sudah Meminjam')">
        <input type="reset" value="RESET" class="buttonForm">

        
        
        </form>
       
        
    </div>
</body>
</html>