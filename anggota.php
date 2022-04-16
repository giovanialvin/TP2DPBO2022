<?php

    require 'function.php';
    
    if (!isset($_GET['key2'])) {
        header("Location: divisi.php");
        exit();
    } 
    // echo "masuk?";
    $key2 = $_GET['key2'];
    $key = $_GET['key1'];
    $sql = "select * from pengurus where id_bidang='$key2' order by jabatan";
    $query = mysqli_query($conn, $sql);
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
    <title>Informasi Anggota</title>
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
        <h1>Informasi Anggota </h1>
        <div class="back" style="text-align: center;">
            <a href="bidang.php?key=<?php echo $key;?>" style="text-align: center; text-decoration: none;"> &LeftArrow; Kembali</a>

        </div>
        <hr>

        <table class="table table-striped table-hover" id="productSizes">

            
            <tr >
                <th width="10%">
                    No
                </th>
                <th style="width:20%">
                    Nama
                </th>
                <th>
                    Jabatan
                </th>
                <th>
                    Divisi
                </th>
                <th>
                   
                </th>
                <th>

                </th>
            </tr>
            
            <?php 
                $no = 1; 
                while($data =  mysqli_fetch_assoc($query)){
                    
                    echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$data['nama'].'</td>';
                    echo '<td>'.$data['jabatan'].'</td>';
                    echo '<td>'.$data['divisi'].'</td>';
                    $key3= $data['id_pengurus'];
                    // echo $key3;
                    echo '<td width="20%">'.'<a href="pengurus.php?key='.$key3.'"> Selengkapnya &RightArrow;</a>'.'</td>';
                    echo '<td width="15%" style="text-align:center; ">'.'<a href="" style="background-color:#787A91; color:#eee; padding:2px 5px; text-decoration:none;"> Delete</a> <a href="update.php?key='.$key3.'" style="background-color:#141E61; color:#eee; padding:2px 5px; text-decoration:none;"> Edit</a>'.'</td>';
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

