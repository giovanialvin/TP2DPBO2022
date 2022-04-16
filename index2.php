<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="assets/upi.png" rel="shortcut icon">
    <title>Pegawai</title>
    <style>
        .button{
            margin-bottom: 20px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<main>
    <h2>Daftar Riwayat Hidup</h2>
    <form action="index.php" method="post">
        <p> Cari berdasarkan nama / no telepon / alamat</p>
        <input id="filter" type="text" name='filter' placeholder="Filter">
        <div class="button">
            <input class="btn btn-dark" type="submit" name='submit' value="Search">
            <input class="btn btn-dark" type="reset" name='reset' value="Cancel">
            <input class="btn btn-dark" type="submit"  value="Refresh" onClick="document.location.reload(true)">
        </div>

            
            <!-- <input type="sumbit" name='submit'> -->
                
    </form>
    <a href="insert.php" > Record Baru </a>
    <?php
    $conn  = mysqli_connect("localhost", "root", "", "master_contoh");
   
    //MEMBUAT QUERY
    if (isset($_POST['filter'])) {
        $filter_key ="%".$_POST['filter']."%";
    } else {
        $filter_key="%%";
    }

    $sql = "select * from master where nama like '$filter_key' or 
            telp like '$filter_key' or alamat like '$filter_key'";
    $query = mysqli_query($conn, $sql); 

    //inisialisasi ->eksekusi query
    $id_drh_master = 1;

    //awal loop
    echo '<table border = 1>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telp</th>
                <th>Email</th>
				<th>Pendidikan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>';
    while ($data = mysqli_fetch_object($query)) {
        //print -> menampilkan data
          echo '<tr>
			<td>'.$id_drh_master.'</td>
			<td>'.$data -> nama.'</td>
            <td>'.$data -> alamat.'</td>
			<td>'.$data -> telp.'</td>
            <td>'.$data -> email.'</td>
			<td>'.$data -> pendidikan.'</td>
			';

        $key = $data -> id;
        echo "  <td> <a href='update.php?key=$key'>Update</a> / <a href='delete.php?key=$key'>Delete</a> / <a href='index2.php?key=$key'>Detail</a> </td>";
        
        //next -> next record
        $id_drh_master++;
    } 
    echo '
	</tbody>
    </table>';
    ?>
    

</main>


</body>
</html>
