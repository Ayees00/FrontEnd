<?php
include('koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
// $img = $_FILES['img']['name'];

$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$image = $_FILES['img']['name'];
$x = explode('.', $image);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['img']['size'];
$file_tmp = $_FILES['img']['tmp_name'];
if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 344070) {
        move_uploaded_file($file_tmp, 'foto/' . $image);
        $query = mysqli_query($connet, "INSERT INTO db_koka (nama, email, no_hp, img) VALUES ('$nama','$email','$no_hp','$image')");
        if ($query) {
            $message = "<div>Data Berhasil DI Simpan</div>";
        } else {
            $message = "<div>Image gagal DI Simpan</div>";
        }
    } else {
        $message = "<di>Ukuran Image terlalu Besar</div>";
    }
} else {
    $message = "<div>ekstensi image ridks diizinkan</div>";
}




// if ($img != "") {
//     $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
//     $x = explode('.', $img);
//     $ekstensi = strtolower(end($x));
//     $file_tmp = $_FILES['img']['tmp_name'];
//     $angka_acak = rand(1, 999);
//     $nama_foto_baru = $angka_acak . '-' . $img;

//     if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
//         move_uploaded_file($file_tmp, 'foto/' . $nama_foto_baru);

//         $query = "INSERT INTO db_koka (nama, email, no_hp, img) VALUES ('$nama','$email','$no_hp','$img')";
//         $result = mysqli_query($connet, $query);

//         if (!$result) {
//             die("Query Error : " . mysqli_errno($connet) . " - " . mysqli_error($connet));
//         } else {
//             echo "<script>alert('Data Berhasil Ditambahkan!');window.location='index.php';</script>";
//         }
//     } else {
//         echo "<script>alert('Ekstensi Gambar hanya bisa png, jpg & jpeg!');window.location='add.php';</script>";
//     }
// } else {
//     $query = "INSERT INTO db_koka (nama, email, no_hp) VALUES ('$nama','$email','$no_hp')";
//     $result = mysqli_query($connet, $query);

//     if (!$result) {
//         die("Query Error : " . mysqli_errno($connet) . " - " . mysqli_error($connet));
//     } else {
//         echo "<script>alert('Data Berhasil Ditambahkan!');window.location='index.php';</script>";
//     }
// }
?>
<script type="text/javascript">
    document.location = "index.php"
</script>