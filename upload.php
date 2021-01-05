<?php

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
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // File info
        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 10);

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
        $fileName = basename($_FILES["image1"]["name"]);
        $imageUploadPath = $uploadPath1 . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image1"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 10);

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
        $fileName = basename($_FILES["image2"]["name"]);
        $imageUploadPath = $uploadPath2 . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Syarat format yang diperbolehkan
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // array gambar sementara
            $imageTemp = $_FILES["image2"]["tmp_name"];

            // Kompres dan upload data
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 10);

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

// Mencetak pesan status
//echo $statusMsg;

include 'template/header.php';
include 'done.php';
include 'template/footer.php';
