<?php 
        require 'function.php';

        //cek key, jika kosong kembali ke index
        if (!isset($_GET['key'])) {
            header("Location: index.php");
            exit();
        }
        //ambil key
        $key = $_GET['key'];
        $clue = $_GET['clue'];


        if($clue === "divisi"){
            $query = mysqli_query($conn, "delete from divisi where id_divisi = '$key'");
            

        }
        else if($clue === "bidang"){
            $query = mysqli_query($conn, "delete from bidang_divisi where id_bidang = '$key'");

        }
        //membuat query

        // echo "Record telah dihapus!<br>";
        header("Location: divisi.php");
        
?>