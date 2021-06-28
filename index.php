<!DOCTYPE html>
<html lang="en">
<head>
<style>

         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 15px; border: 2px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
         </style>
         <meta charset="UTF-8">
    <title>Transaksi Toko Bangunan</title>
    <h1 align =center> Transaksi Toko Bangunan</h1>
</head>
<body>

        <div class="container">
           <h2> Barang </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>ID</th>
                    <th>KODE BARANG </th>
                    <th>NAMA BARANG</th>
                    <th>HARGA</th>
                    <th>STOCK</th>
                </tr>

                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM barang";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['kode_barang'];?></td>
                    <td><?= $row['nama_barang'];?></td>
                    <td><?= $row['harga'];?></td> 
                    <td><?= $row['stok'];?></td> 
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>

        <div class="container">
           <h2> Supplier </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>ID</th>
                    <th>NAMA </th>
                    <th>TELP</th>
                    <th>ALAMAT</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM supplier";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['telp'];?></td>  
                    <td><?= $row['alamat'];?></td> 
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="container">
           <h2> Transaksi </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>ID</th>
                    <th>WAKTU TRANSAKSI </th>
                    <th>KETERANGAN</th>
                    <th>TOTAL</th>
                    <th>PELANGGAN</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM transaksii";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['waktu_transaksi'];?></td>
                    <td><?= $row['keterangan'];?></td> 
                    <td><?= $row['total'];?></td>  
                    <td><?= $row['pelanggan'];?></td> 
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="container">
           <h2> Transaksi Detail </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>TRANSAKSI ID</th>
                    <th>BARANG ID</th>
                    <th>HARGA</th>
                    <th>TOTAL</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM transaksi_detail";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['transaksi_id'];?></td>
                    <td><?= $row['barang_id'];?></td>
                    <td><?= $row['harga'];?></td> 
                    <td><?= $row['total'];?></td> 
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
</body>
</html>
