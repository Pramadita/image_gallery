<?php
include 'connect.php';
$nama_file = $_FILES['image']['name'];
$ukuran_file = $_FILES['image']['size'];
$tmp_file = $_FILES['image']['tmp_name'];

$nama_file1 = $_FILES['image1']['name'];
$ukuran_file1 = $_FILES['image1']['size'];
$tmp_file1 = $_FILES['image1']['tmp_name'];

$nama_file2 = $_FILES['image2']['name'];
$ukuran_file2 = $_FILES['image2']['size'];
$tmp_file2 = $_FILES['image2']['tmp_name'];

$artist_name = $_POST['artist_name'];
$Sosmed = $_POST['Sosmed'];
$CP = $_POST['CP'];
$Story1 = $_POST['Story1'];
$Story2 = $_POST['Story2'];
$Story3 = $_POST['Story3'];


function compressImage($source, $destination, $quality)
{
    // Mendapatkan info gambar
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Membuat gambar baru dari file yang diupload
    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    // simpan gambar
    imagejpeg($image, $destination, $quality);

    // Return gambar yang dikompres
    return $destination;
}

// Lokasi path untuk upload
$uploadPath = "uploads/1/";
$uploadPath1 = "uploads/2/";
$uploadPath2 = "uploads/3/";

// ketika melakukan submit file
$status = $statusMsg = '';
$fileName = basename($_FILES["image"]["name"]);
$fileName1 = basename($_FILES["image1"]["name"]);
$fileName2 = basename($_FILES["image2"]["name"]);
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // File info

        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

            if ($compressedImage) {
                $status = 'success';
                $statusMsg = "Gambar Berhasil dikompres.";
            } else {
                $statusMsg = "Kompres gambar gagal!";
            }
        } else {
            $statusMsg = 'Maaf, hanya JPG, JPEG, PNG, & GIF yang diperbolehkan.';
        }
    } else {
        $statusMsg = 'Pilih gambar untuk diupload.';
    }
    if (!empty($_FILES["image1"]["name"])) {
        // File info
        $imageUploadPath = $uploadPath1 . $fileName1;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image1"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

            if ($compressedImage) {
                $status = 'success';
                $statusMsg = "Gambar Berhasil dikompres.";
            } else {
                $statusMsg = "Kompres gambar gagal!";
            }
        } else {
            $statusMsg = 'Maaf, hanya JPG, JPEG, PNG, & GIF yang diperbolehkan.';
        }
    } else {
        $statusMsg = 'Pilih gambar untuk diupload.';
    }
    if (!empty($_FILES["image2"]["name"])) {
        // File info
        $imageUploadPath = $uploadPath2 . $fileName2;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image2"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

            if ($compressedImage) {
                $status = 'success';
                $statusMsg = "Gambar Berhasil dikompres.";
            } else {
                $statusMsg = "Kompres gambar gagal!";
            }
        } else {
            $statusMsg = 'Maaf, hanya JPG, JPEG, PNG, & GIF yang diperbolehkan.';
        }
    } else {
        $statusMsg = 'Pilih gambar untuk diupload.';
    }
}
mysqli_query($koneksi, "insert into artist (artist_name,Sosmed,CP,art1,art2,art3,Story1,Story2,Story3,size1,size2,size3) values ('$artist_name','$Sosmed','$CP','$nama_file','$nama_file1','$nama_file2','$Story1','$Story2','$Story3','$ukuran_file','$ukuran_file1', '$ukuran_file2')");

// Mencetak pesan status
//echo $statusMsg;

include 'template/header.php';
include 'done.php';
include 'template/footer.php';
