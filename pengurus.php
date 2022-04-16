<?php
    require 'function.php';
    $key = $_GET['key'];
    $sql = "select * from pengurus where id_pengurus=$key";
    $query = mysqli_query($conn, $sql);            
    $data =  mysqli_fetch_assoc($query);
    // echo $data['nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
        }
        .judul {
            margin: 20px 0;
        }
        img{
            margin: 20px 0;
        }

        .action{
            display: flex;
            /* text-align: center; */
            margin: 30px 0;
            justify-content: center;
        }

        .action a{
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
           color:#eee
        }

    </style>
    <title>Profil Pengurus</title>
</head>
<body>
    <header style="text-align: center; background-color:#0F044C; padding : 20px; margin-bottom:20px">
        <div class="logo">
            <a href="index.php"> <img src="img/logo-01.png" alt="Logo Kabinet" width="100px"> </a>
        </div>
    </header>
    
    <div class="judul" style="text-align: center;">
        <h1 style="font-size: 50px;">
            Profil Pengurus
        </h1>
        <h2 style="font-size: 25px;">
            BEM Himalaya UTB
        </h2>
    </div>

    <main>
        <div class="gambar" style="text-align: center;">
            <img src="img/<?php echo $data['foto'];?>" alt="Foto diri"  width='300px' height='450px' style="text-align: center;">

        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>
                    Nama
                </th>
                <td>
                    <?php echo $data['nama'];?>
                </td>
            </tr>

            <tr>
                <th>
                    NIM
                </th>
                <td>
                    <?php echo $data['nim'];?>
                </td>
            </tr>

            <tr>
                <th>
                    Semester
                </th>
                <td>
                <?php echo $data['semester'];?>
                </td>
            </tr>

            <tr>
                <th>
                    Jabatan
                </th>
                <td>
                <?php echo $data['jabatan'];?>
                </td>
            </tr>

            <tr>
                <th>
                    Divisi
                </th>
                <td>
                <?php echo $data['divisi'];?>
                </td>
            </tr>

        </table>

        <div class="action">
            
            <a href="delete.php?key=<?php echo $key?>" class="badge" style="background-color:#787A91">Delete</a>
            <a href="update.php?key=<?php echo $key?>" class="badge" style="background-color:#0F044C">Edit</a>
        </div>
    </main>

    <footer style="background-color: #0F044C; padding: 20px; text-align:center; display:flex; justify-content:center">
        <p style="color: #eee;">
            Copyright &copy; 2022 | Alvin Giovani | C1 | Ilmu Komputer
        </p>
    </footer>
</body>
</html>