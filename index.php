<?php
    require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM Himalaya</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style/style.css">
    <style>
        .divisi{
            text-align: center;
            background-color: #141E61;
            padding: 20px;
        }

        .divisi a{
            text-decoration: none;
            color: #eee;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <a href="index.php"> <img src="img/logo2.png" alt="Logo Kabinet" width="50px"> </a>
        </div>
        
            <ul style="list-style: none;">
                <li>
                    <a href="index.php#pimpinan">Pimpinan</a> 
                </li>
                <li>
                    <a href="index.php#kominfo">Kominfo</a>
                </li>
                <li>
                    <a href="index.php#advokasi">Advokasi</a>
                </li>
                <li>
                    <a href="index.php#PSDM">PSDM</a>
                </li>
                <li>
                    <a href="index.php#mikat">Mikat</a>
                </li>
            </ul>

            
        

        <div class="nav">
            <a href="insert.php">Add</a>
        </div>
    </header>
    
    <div class="judul">
        <img src="img/logo-01.png" alt="Logo Kabinet" width="400px">
        <h1>
            Badan Eksekutif Mahasiswa Himalaya
        </h1>
        <h2>
            Universitas Tersana Baru
        </h2>
    </div>

    <div class="divisi">
        <a href="divisi.php">
            Informasi Divisi
        </a>
    </div>

    <div class="pimpinan" id="pimpinan">
        <div class="kabem-wakabem">
            <?php
                
                // echo "masuk?";

                $sql = "select * from pengurus where divisi='Pimpinan' and id_bidang=10";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<h1>".$data["jabatan"]."</h1>";
                    $foto = $data['foto'];
                    echo "  <img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "</a>";
                    
                }


            ?>
        </div>
        <h1>Sekretaris Umum</h1>
        <div class="sekretaris">
            
            <?php


                $sql = "select * from pengurus where divisi='Pimpinan' and id_bidang=1";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";


                    
                }


            ?>
        </div>
        <h1>Bendahara Umum</h1>
        <div class="bendahara">
            
            <?php


                $sql = "select * from pengurus where divisi='Pimpinan' and id_bidang=2";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";



                    
                }
            ?>
        </div>
    </div>

    <div class="kominfo" id="kominfo">
        <h1>Divisi Komunikasi dan Informasi</h1>
            <?php


                $sql = "select * from pengurus where divisi='Kominfo' and id_bidang=13";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</a>";


                    
                }


            ?>
            <div class="ketua-komunikasi">
                <h1>Bidang Komunikasi</h1>
                <?php


                    $sql = "select * from pengurus where divisi='Kominfo' and id_bidang=3 and jabatan ='Ketua Bidang Komunikasi'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        $foto = $data['foto'];
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";

                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";

                        
                    }


                ?>
            </div>

            <div class="komunikasi">

                <?php


                $sql = "select * from pengurus where divisi='Kominfo' and id_bidang=3 and jabatan !='Ketua Bidang Komunikasi'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";                    
                    echo "<div class='anggota'>";
                    $foto = $data['foto'];
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";

                    
                }


                ?>
            </div>

            <div class="ketua-informasi">
                <h1>Bidang Informasi</h1>
                <?php


                    $sql = "select * from pengurus where divisi='Kominfo' and id_bidang=4 and jabatan ='Ketua Bidang Informasi'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";

                        $foto = $data['foto'];
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";

                        
                    }


                ?>
            </div>

            <div class="informasi">
                <?php


                $sql = "select * from pengurus where divisi='Kominfo' and id_bidang=4 and jabatan !='Ketua Bidang Informasi'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";                    
                    echo "<div class='anggota'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";

                    
                }


                ?>
            </div>


    </div>
    
    <div class="advokasi" id="advokasi">

        <h1>Divisi Advokasi</h1>
            <?php


                $sql = "select * from pengurus where divisi='advokasi' and id_bidang=15";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</a>";

                    
                }


            ?>
            <div class="ketua-advokasi">
                <h1>Bidang Advokasi</h1>
                <?php


                    $sql = "select * from pengurus where divisi='Advokasi' and id_bidang=5 and jabatan ='Ketua Bidang Advokasi'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        $foto = $data['foto'];
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";

                        
                    }


                ?>
            </div>

            <div class="advokasi-bidang">

                <?php


                $sql = "select * from pengurus where divisi='advokasi' and id_bidang=5 and jabatan !='Ketua Bidang Advokasi'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";

                    echo "<div class='anggota'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";


                    
                }


                ?>
            </div>

            

    </div>
    
    <div class="PSDM" id="PSDM">
        <h1>Divisi Pengembangan Sumberdaya Manusia</h1>
            <?php


                $sql = "select * from pengurus where divisi='PSDM' and id_bidang=16";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</a>";

                }


            ?>
            <div class="ketua-kaderisasi">
                <h1>Bidang Kaderisasi</h1>
                <?php


                    $sql = "select * from pengurus where divisi='PSDM' and id_bidang=6 and jabatan ='Ketua Bidang Kaderisasi'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                        $foto = $data['foto'];
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";


                        
                    }


                ?>
            </div>

            <div class="kaderisasi">

                <?php


                $sql = "select * from pengurus where divisi='PSDM' and id_bidang=6 and jabatan !='Ketua Bidang Kaderisasi'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";


                    
                }


                ?>
            </div>

            <div class="ketua-Penelitian dan Pengembangan">
                <h1>Bidang Penelitian dan Pengembangan</h1>
                <?php


                    $sql = "select * from pengurus where divisi='PSDM' and id_bidang=7 and jabatan ='Ketua Bidang Penelitian dan Pengembangan'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        $foto = $data['foto'];
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";

                    }


                ?>
            </div>

            <div class="Penelitian-dan-Pengembangan">
                <?php


                $sql = "select * from pengurus where divisi='PSDM' and id_bidang=7 and jabatan !='Ketua Bidang Penelitian dan Pengembangan'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";                    
                    $foto = $data['foto'];
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";


                    
                }


                ?>
            </div>


    </div>
    
    <div class="mikat" id="mikat">
        <h1>Divisi Minat dan Bakat</h1>
            <?php


                $sql = "select * from pengurus where divisi='Mikat' and id_bidang=17";
                $query = mysqli_query($conn, $sql);
                // $no = 1;
                
                while($data =  mysqli_fetch_assoc($query)){
                    $foto = $data['foto'];
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</a>";

                    
                }


            ?>
            <div class="ketua-olahraga">
                <h1>Bidang Olahraga</h1>
                <?php


                    $sql = "select * from pengurus where divisi='Mikat' and id_bidang=8 and jabatan ='Ketua Bidang Olahraga'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        $foto = $data['foto'];
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";

                        
                    }


                ?>
            </div>

            <div class="olahraga">

                <?php


                $sql = "select * from pengurus where divisi='Mikat' and id_bidang=8 and jabatan !='Ketua Bidang Olahraga'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";
                    $foto = $data['foto'];
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";

                    
                }


                ?>
            </div>

            <div class="ketua-seni">
                <h1>Bidang Seni</h1>
                <?php


                    $sql = "select * from pengurus where divisi='Mikat' and id_bidang=9 and jabatan ='Ketua Bidang Seni'";
                    $query = mysqli_query($conn, $sql);
                    // $no = 1;
                    
                    while($data =  mysqli_fetch_assoc($query)){
                        $foto = $data['foto'];
                        echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                        echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                        echo "<h2>".$data["nama"]."</h2>";
                        echo "<p>".$data["jabatan"]."</p>";
                        echo "</a>";


                        
                    }


                ?>
            </div>

            <div class="seni">
                <?php


                $sql = "select * from pengurus where divisi='Mikat' and id_bidang=9 and jabatan !='Ketua Bidang Seni'";
                $query = mysqli_query($conn, $sql);
                // $no = 1;

                while($data =  mysqli_fetch_assoc($query)){
                    echo "<a href='pengurus.php?key=" .$data['id_pengurus']. "' style='text-decoration:none'>";
                    echo "<div class='anggota'>";
                    $foto = $data['foto'];
                    echo "<img src='img/".$foto."' alt='Foto Diri' width='200px' height='300px'>";
                    echo "<h2>".$data["nama"]."</h2>";
                    echo "<p>".$data["jabatan"]."</p>";
                    echo "</div>";
                    echo "</a>";


                    
                }


                ?>
            </div>


    </div>
    <footer style="background-color: #0F044C; padding:20px; text-align:center; display:flex; justify-content:center">
        <p style="color: #eee;">
            Copyright &copy; 2022 | Alvin Giovani | C1 | Ilmu Komputer
        </p>
    </footer>
</body>
</html>