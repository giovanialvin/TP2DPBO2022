<?php

    require 'function.php';


    if (!isset($_GET['key'])) {
        header("Location: index.php");
        exit();
    }

    //ambil key
    $key = $_GET['key'];
    $clue = $_GET['clue'];

    $nama="";
    $ketua="";


    if($clue === "divisi"){
        $query = mysqli_query($conn, "select * from divisi where id_divisi ='$key' limit 1");
        $data = mysqli_fetch_assoc($query);
        
        //ambil field
        $nama = $data['nama_divisi'];
        $ketua = $data['ketua_divisi'];

    }
    else if($clue === "bidang"){
        $query = mysqli_query($conn, "select * from bidang_divisi where id_bidang ='$key' limit 1");
        $data = mysqli_fetch_assoc($query);
        
        //ambil field
        $nama = $data['nama_bidang'];
        $ketua = $data['ketua_bidang'];

    }

    

    ;

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
        .container{
            margin-top: 4em;
        }
        hr{
            margin-bottom: 100px;
        }
        li{
            margin-bottom: 20px;
        }
        li input{
            margin-top: 10px;
        }
        footer{
            margin-top: 150px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Update Record 

            <?php
                if($clue === "divisi"){
                    echo "Divisi";
                }
                else if($clue === "bidang"){
                    echo "Bidang";
                }
            ?>
        </h1>
        <hr>

        <form action="" method="POST">
            <ul style="list-style: none;">
                <li>
                    <input type="hidden" name="key" value="<?php echo $key; ?>">


                </li>
                

                <li>
                <div class="form-group">
                    <label for="nama">
                        Nama 
                        <?php
                            if($clue === "divisi"){
                                echo "Divisi";
                            }
                            else if($clue === "bidang"){
                                echo "Bidang";
                            }
                        ?>
                    </label>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama?>">
                </div>
                </li>

                <li>
                    <div class="form-group">
                        <label for="ketua">
                            Ketua
                            <?php
                                if($clue === "divisi"){
                                    echo "Divisi";
                                }
                                else if($clue === "bidang"){
                                    echo "Bidang";
                                }
                            ?>
                        </label> <br>
                        <input type="text" name="ketua" id="ketua" value="<?php echo $ketua?>">
                    </div>
                </li>
                

                <li>
                <li style="display: flex; align-items:center;">
                    <a href="divisi.php" style="text-decoration: none; padding:8px 15px; width: 10%; text-align:center; border-radius:7%; margin:0 10px; background-color:#787A91; color:#eee">Kembali</a> 
                    
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
    
    $key = $_POST['key'];
    // echo $key;
    if(update2($_POST, $clue) > 0){
        
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=divisi.php">';
        exit;
    }
    else{
        echo mysqli_error($conn);
    }
    // header("Location: index.php");
}
?>