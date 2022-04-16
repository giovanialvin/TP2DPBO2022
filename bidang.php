<?php

    require 'function.php';
    
    if (!isset($_GET['key'])) {
        header("Location: divisi.php");
        exit();
    } 
    // echo "masuk?";
    $key = $_GET['key'];
    $sql = "select * from bidang_divisi where id_divisi='$key' order by nama_bidang";
    $sql2 = "select * from divisi where id_divisi='$key'";

    $query = mysqli_query($conn, $sql);
    $query2 = mysqli_query($conn, $sql2);
    // $no = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/style2.css"> -->
    <title>Informasi Bidang</title>
    <style>
        .container{
            margin-top: 4em;
        }
        h1{
            text-align: center;
            padding: 20px;
        }
        hr{
            border: 1px solid;
            margin-bottom: 150px;
        }
        footer{
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Bidang Divisi

            <?php
                $data =  mysqli_fetch_assoc($query2);
                echo $data['nama_divisi'];
            ?>
        </h1>
        <div class="back" style="text-align: center;">
            <a href="divisi.php" style="text-align: center; text-decoration: none;"> &LeftArrow; Kembali</a>

        </div>
        <hr>

        <table class="table table-striped table-hover" id="productSizes">

            
            <tr >
                <th width="10%">
                    No
                </th>
                <th style="width:20%">
                    Nama Bidang
                </th>
                <th>
                    Ketua Bidang
                </th>
                <th>
                    Anggota
                </th>
                <th>

                </th>
            </tr>
            
            <?php 
                $no = 1; 
                while($data =  mysqli_fetch_assoc($query)){
                    
                    echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$data['nama_bidang'].'</td>';
                    echo '<td>'.$data['ketua_bidang'].'</td>';
                    $key2 = $data['id_bidang'];
                    echo '<td width="20%">'.'<a href="anggota.php?key2='.$key2.'&key1='.$key.'"> Selengkapnya &RightArrow;</a>'.'</td>';
                    echo '<td width="15%" style="text-align:center; ">'.'<a href="delete2.php?key='.$key2.'&clue=bidang" style="background-color:#787A91; color:#eee; padding:2px 5px; text-decoration:none;"> Delete</a>  <a href="update2.php?key='.$key2.'&clue=bidang"style="background-color:#141E61; color:#eee; padding:2px 5px; text-decoration:none;"> Edit</a>'.'</td>';
                    // echo ; 
                    echo '</tr>';
                    $no++;
                }
            ?>
        </table>
        
    </div>
    <footer style="background-color: #0F044C; padding:20px; text-align:center; display:flex; justify-content:center; color:#eee">

        <p>
            Copyright &copy; 2022 | Alvin Giovani | C1 | Ilmu Komputer
        </p>
    </footer>
</body>
</html>

