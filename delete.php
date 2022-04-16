<?php 
        require 'function.php';

        //cek key, jika kosong kembali ke index
        if (!isset($_GET['key'])) {
            header("Location: index.php");
            exit();
        }
        //ambil key
        $key = $_GET['key'];

        
        //membuat query
        $query = mysqli_query($conn, "delete from pengurus where id_pengurus = '$key'");

        // echo "Record telah dihapus!<br>";
        header("Location: index.php");
        
?>