<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="form.css" rel="stylesheet">

</head>
<body>
<form action="form.php" method="post">
    <?php 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $lamaPinjam = $_POST['lamaPinjam'];
    $noTel = $_POST['noTel'];
    $tanggal = date(' l, d F Y');
    ?>
   
    <div class="outputForm">
        <center>

            <table border="6">
            <tr align="center"  >
                <th  colspan="3">Form Peminjaman Buku</th>
            </tr>
            <tr > 
                <td >Nama </td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr > 
                <td >Alamat</td>
                <td><?php echo $alamat;?></td>
            </tr>
            <tr > 
                <td >Lama Pinjam</td>
                <td><?php echo $lamaPinjam;?> Hari</td>
            </tr>
            <tr > 
                <td >No Telepon</td>
                <td><?php echo $noTel;?></td>
            </tr>
            <tr > 
                <td >Tanggal Pinjam</td>
                <td><?php echo $tanggal;?></td>
            </tr>
            <br>
            </table>
            <br>
            
    
        <a href="../index.php" style="color:black; text-decoration:none;">HOME</a><br><br>
        <a href="../Form Peminjaman/form.php" style="color:black; text-decoration:none;">KEMBALI</a>
        
        </center>
           
</body>

</html>