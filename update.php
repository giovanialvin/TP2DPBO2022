<?php

    require 'function.php';


    if (!isset($_GET['key'])) {
        header("Location: index.php");
        exit();
    }

    //ambil key
    $key = $_GET['key'];
    // echo $key;
    //membuat query
    $query = mysqli_query($conn, "select * from pengurus where id_pengurus ='$key' limit 1");
    $data = mysqli_fetch_assoc($query);

    //ambil field
    $id_bidang = $data['id_bidang'];
    $nama = $data['nama'];
    $nim = $data['nim'];
    $semester = $data['semester'];
    $divisi = $data['divisi'];
    $jabatan = $data['jabatan'];
    $foto = $data['foto'];
    
    $query2 = mysqli_query($conn, "select * from bidang_divisi where id_bidang ='$id_bidang' limit 1");
    $data2 = mysqli_fetch_assoc($query2);
    $bidang = $data2['nama_bidang'];
    // echo $data2['nama_bidang'];
    // echo $jabatan."asu";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style2.css">
    <title>Update Data</title>
    <style>
        li{
            margin-bottom: 20px;
        }
        li input{
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Update Record Pengurus</h1>
        <hr>

        <form action="" method="POST">
            <ul style="list-style: none;">
                <li>
                    <input type="hidden" name="key" value="<?php echo $key; ?>">


                </li>
                <li>
                    <div class="form-group">
                        <label for="nim">
                            NIM
                        </label> <br>
                        <input type="text" name="nim" id="nim" value="<?php echo $nim?>">
                    </div>
                </li>

                <li>
                <div class="form-group">
                    <label for="nama">
                        Nama
                    </label>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama?>">
                </div>
                </li>

                
                <li>
                <div class="form-group">
                    <label for="semester">
                        Semester
                    </label>
                    <input type="text" name="semester" id="semester" value="<?php echo $semester?>">
                </div>
                </li>

                <li><div class="form-group">
                    <label for="divisi">
                        Divisi
                    </label>
                    <select id="divisi" name="divisi" <?php $divisi?>>
                        <option value="Pimpinan" <?php if($divisi=='Pimpinan') echo 'selected="selected"';?>>Pimpinan</option>
                        <option value="Kominfo"  <?php if($divisi=='Kominfo') echo 'selected="selected"';?>>Kominfo</option>
                        <option value="Advokasi"  <?php if($divisi=='Advokasi') echo 'selected="selected"';?>>Advokasi</option>
                        <option value="PSDM"  <?php if($divisi=='PSDM') echo 'selected="selected"';?>>PSDM</option>
                        <option value="Mikat"  <?php if($divisi=='Mikat') echo 'selected="selected"';?>>Mikat</option>
                    </select>
                </div></li>

                <li><div class="form-group">
                    <label for="bidang">
                        Bidang
                    </label>
                    <select id="bidang" name="bidang"<?php $bidang?>>
                        <option value="Non Bidang" <?php if($bidang=='Non Bidang') echo 'selected="selected"';?>>Non Bidang</option>
                        <option value="Sekretaris Umum"<?php if($bidang=='Sekretaris Umum') echo 'selected="selected"';?>>Sekretaris Umum</option>
                        <option value="Bendahara Umum"<?php if($bidang=='Bendahara Umum') echo 'selected="selected"';?>>Bendahara Umum</option>
                        <option value="Komunikasi"<?php if($bidang=='Komunikasi') echo 'selected="selected"';?>>Komunikasi</option>
                        <option value="Informasi"<?php if($bidang=='Informasi') echo 'selected="selected"';?>>Informasi</option>
                        <option value="Advokasi"<?php if($bidang=='Advokasi') echo 'selected="selected"';?>>Advokasi</option>
                        <option value="Kaderisasi"<?php if($bidang=='Kaderisasi') echo 'selected="selected"';?>>Kaderisasi</option>
                        <option value="Penelitian dan Pengembangan"<?php if($bidang=='Penelitian dan Pengembangan') echo 'selected="selected"';?>>Penelitian dan Pengembangan</option>
                        <option value="Olahraga"<?php if($bidang=='Olahraga') echo 'selected="selected"';?>>Olahraga</option>
                        <option value="Seni"<?php if($bidang=='Seni') echo 'selected="selected"';?>>Seni</option>
                    </select>
                </div></li>


                <li><div class="form-group">
                    <label for="jabatan">
                        Jabatan
                    </label>
                    <select id="jabatan" name="jabatan">
                        <option value="Ketua Divisi">Ketua Divisi</option>
                        <option value="Wakil Ketua Divisi">Wakil Ketua Divisi</option>
                        <option value="Ketua Bidang">Ketua Bidang</option>
                        <option value="Sekretaris">Sekretaris Divisi</option>
                        <option value="Bendahara">Bendahara Divisi</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div></li>

                <li><div class="form-group">
                    <label for="foto">
                        Foto
                    </label>
                    <input type="text" name="foto" id="foto" value="<?php echo $foto?>">
                </div></li>

                <li>
                <li style="display: flex; align-items:center;">
                    <a href="pengurus.php?key=<?php echo $key?>" style="text-decoration: none; padding:8px 15px; width: 10%; text-align:center; border-radius:7%; margin:0 10px; background-color:#787A91; color:#eee">Kembali</a> 
                    
                    <button type="submit" name="update" id="update" class="btn" style="background-color:#0F044C; color:#eee">Kirim</button>
                </li>
                </li>


            </ul>
        </form>
        
            
        </form>


    </div>
    <footer style="background-color: #0F044C; padding:20px; text-align:center; display:flex; justify-content:center">
        <p>
            Copyright &copy; 2022 | Alvin Giovani | C1 | Ilmu Komputer
        </p>
    </footer>
</body>

</html>

<?php
if(isset($_POST["update"])){
    if($_POST["bidang"] !== "Non Bidang" || $_POST["jabatan"] === "Ketua Bidang"){
        $jabatan = $_POST["jabatan"] ." ". $_POST["bidang"];
    }
    
    else{
        if($_POST["jabatan"] === "Ketua Divisi" || $_POST["jabatan"] === "Sekretaris" || $_POST["jabatan"] === "Bendahara" || $_POST["jabatan"] === "Wakil Ketua Divisi" ){
            
            $jabatan = $_POST["jabatan"] ." ". $_POST["divisi"];
            if($jabatan === "Ketua Divisi Pimpinan"){
                $jabatan = "Ketua BEM Himalaya";
            }
            else if($jabatan === "Wakil Ketua Divisi Pimpinan"){
                $jabatan = "Wakil Ketua BEM Himalaya";
            }
        }
        
    }
    $_POST['jabatan']= $jabatan;


    //mengecek id bidang
    //untuk 
    if($_POST['bidang'] === "Non Bidang" && $_POST['divisi'] === "Pimpinan"){
        $id_bidang = 10;
    }
    else if($_POST['bidang'] === "Non Bidang" && $_POST['divisi'] === "Kominfo"){
        $id_bidang = 13;
    } 
    else if($_POST['bidang'] === "Non Bidang" && $_POST['divisi'] === "Advokasi"){
        $id_bidang = 15;
    }
    else if($_POST['bidang'] === "Non Bidang" && $_POST['divisi'] === "PSDM"){
        $id_bidang = 16;
    }
    else if($_POST['bidang'] === "Non Bidang" && $_POST['divisi'] === "Mikat"){
        $id_bidang = 17;

    }
    else if($_POST['bidang'] === "Sekretaris Umum"){
        $id_bidang = 1;
    }
    else if($_POST['bidang'] === "Bendahara Umum"){
        $id_bidang = 2;
    }
    else if($_POST['bidang'] === "Komunikasi"){
        $id_bidang = 3;
    }
    else if($_POST['bidang'] === "Informasi"){
        $id_bidang = 4;
    }
    else if($_POST['bidang'] === "Advokasi"){
        $id_bidang = 5;
    }
    else if($_POST['bidang'] === "Kaderisasi"){
        $id_bidang = 6;
    }
    else if($_POST['bidang'] === "Penelitian dan Pengembangan"){
        $id_bidang = 7;
    }
    else if($_POST['bidang'] === "Olahraga"){
        $id_bidang = 8;
    }
    else if($_POST['bidang'] === "Seni"){
        $id_bidang = 9;
    }

    $_POST['bidang'] = $id_bidang;

    $key = $_POST['key'];
    // echo $key;
    if(update($_POST) > 0){
        
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        exit;
    }
    else{
        echo mysqli_error($conn);
    }
    // header("Location: index.php");
}
?>