<?php

    require 'function.php';

    if(isset($_POST["insert"])){
        
        // $nim = $_POST["nim"];
        // $nama = $_POST["nama"];
        
        
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
        // $semester = $_POST["semester"];
        // $divisi = $_POST["divisi"];
        // $foto = $_POST["foto"];
        
        // echo $nim;
        // echo "<br>";
        // echo $nama;
        // echo "<br>";
        // echo $_POST['jabatan'];
        // echo "<br>";
        // echo $semester;
        // echo "<br>";
        // echo $divisi;
        // echo "<br>";
        // echo $foto;
        // echo "<br>";
        if(insert($_POST) > 0){
            header("Location: index.php");
        }
        else{
            echo mysqli_error($conn);
        }
        // echo $_POST['bidang'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style2.css">
    <title>Tambah Record Baru</title>
</head>
<body>
    <div class="container">
        <h1>Record Pengurus Baru</h1>
        <hr>
        <form action="" method="POST">
            <ul style="list-style: none;">
                <li>
                    <div class="form-group">
                        <label for="nim">
                            NIM
                        </label> <br>
                        <input type="text" name="nim" id="nim" placeholder="Masukkan NIM">
                    </div>
                </li>

                <li>
                <div class="form-group">
                    <label for="nama">
                        Nama
                    </label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
                </div>
                </li>

                
                <li>
                <div class="form-group">
                    <label for="semester">
                        Semester
                    </label>
                    <input type="text" name="semester" id="semester" placeholder="Masukkan Semester">
                </div>
                </li>

                <li><div class="form-group">
                    <label for="divisi">
                        Divisi
                    </label>
                    <select id="divisi" name="divisi">
                        <option value="Pimpinan">Pimpinan</option>
                        <option value="Kominfo">Kominfo</option>
                        <option value="Advokasi">Advokasi</option>
                        <option value="PSDM">PSDM</option>
                        <option value="Mikat">Mikat</option>
                    </select>
                </div></li>

                <li><div class="form-group">
                    <label for="bidang">
                        Bidang
                    </label>
                    <select id="bidang" name="bidang">
                        <option value="Non Bidang">Non Bidang</option>
                        <option value="Sekretaris Umum">Sekretaris Umum</option>
                        <option value="Bendahara Umum">Bendahara Umum</option>
                        <option value="Komunikasi">Komunikasi</option>
                        <option value="Informasi">Informasi</option>
                        <option value="Advokasi">Advokasi</option>
                        <option value="Kaderisasi">Kaderisasi</option>
                        <option value="Penelitian dan Pengembangan">Penelitian dan Pengembangan</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Seni">Seni</option>
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
                    <input type="text" name="foto" id="foto" placeholder="ex : nama.jpg">
                </div></li>

                
                <li style="display: flex; align-items:center;">
                    <a href="index.php" style="text-decoration: none; padding:8px 15px; width: 10%; text-align:center; border-radius:7%; margin:0 10px; background-color:#787A91; color:#eee">Kembali</a> 
                    <!-- <a href="pengurus.php" style="text-decoration:none ;"> <button  class="btn btn-danger"> Batal</button> </a> -->
                    <button type="submit" name="insert" id="insert" class="btn" style="background-color:#0F044C; color:#eee">Kirim</button>
                </li>
            </ul>
        </form>
    </div>
    <footer style="background-color: #0F044C; padding:20px; text-align:center; display:flex; justify-content:center">

        <p>
            Copyright &copy; 2022 | Alvin Giovani | C1 | Ilmu Komputer
        </p>
    </footer>
</body>
</html>

