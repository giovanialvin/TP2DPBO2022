<?php
$conn = mysqli_connect("localhost", "root", "", "tp2_dpbo");



function insert($data){
    global $conn;
    //tampung data
    $nim = $data["nim"];
    $nama = $data["nama"];
    $jabatan = $data["jabatan"];
    $semester = $data["semester"];
    $divisi = $data["divisi"];
    $foto = $data["foto"];
    $bidang = $data['bidang'];

    //membuat query
    $query = "insert into pengurus values('', '$bidang', '$nim', '$nama', '$jabatan', '$semester', '$divisi', '$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function update($data){
    global $conn;

    //tampung data
    $key = $data['key'];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $jabatan = $data["jabatan"];
    $semester = $data["semester"];
    $divisi = $data["divisi"];
    $foto = $data["foto"];
    $bidang = $data['bidang'];
    // $id_bidang = $data['id_bidang'];
    // echo $key;
    $query = "update pengurus set 
        nim = '$nim',
        `nama` = '$nama',
        jabatan = '$jabatan',
        semester = '$semester',
        divisi = '$divisi',
        foto = '$foto',
        semester = '$semester',
        id_bidang = '$bidang'
        where id_pengurus = '$key'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function update2($data, $clue){
    global $conn;

    //tampung data
    $key = $data['key'];
    $nama = $data["nama"];
    $ketua = $data['ketua'];

    if($clue === "divisi"){
        
        $query = "update divisi set 
            `nama_divisi` = '$nama',
            ketua_divisi = '$ketua'
            where id_divisi = '$key'";
        mysqli_query($conn, $query);

    }
    else if($clue === "bidang"){
        $query = "update bidang_divisi set 
            `nama_bidang` = '$nama',
            ketua_bidang = '$ketua'
            where id_bidang = '$key'";
        mysqli_query($conn, $query);

    }
    // $id_bidang = $data['id_bidang'];
    // echo $key;
   
    return mysqli_affected_rows($conn);

}

?>


