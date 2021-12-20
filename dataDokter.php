
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
        <title>Daftar Dokter</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleHome.css">
        <link href="css/bootstrap5.0.1.min.css" rel="stylesheet"  crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css"/>
        
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
    <div class="hd">
        <img src="img/dokter.png">
        <div class="btn"><a href="../logout.php">Log out</a></div>
    </div>
  <div class="container-fluid">
    <h2 class="text-center">Data Dokter</h2>
    <p class="datatable design text-center">Klinik Kita Bersama</p>
    <div class="row">
      <div class="container">
        <div class="btnAdd">
         <a href="jadwal.php" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm" >Lihat jadwal dokter</a>
       </div>
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <table id="example" class="table">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Spesialis</th>
                <th>No. Telepon</th>
                <th>Options</th>
            </thead>
                    <?php
                        include "koneksi.php";

                        $query = "SELECT * FROM dokter";
                        $result=mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td> <?php echo $row["id"] ?></td>
                        <td> <?php echo $row["namaDokter"] ?></td>
                        <td> <?php echo $row["almt"] ?></td>
                        <td> <?php echo $row["jeniskelamin"] ?></td>
                        <td> <?php echo $row["spesialis"] ?></td>
                        <td> <?php echo $row["telp"] ?></td>
                        <td>
                            <div class="btnadd">
                                <button class="btn btn-danger btn-sm"><a href="hapusdokter.php?id=<?php echo $row['id']; ?>">Hapus</button></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        }else{
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class="footer">
            <p>Copyright Klinik Kita Bersama</p>
        </div>
        
    </body>
</html>