<?php
if (isset($_GET['art1'])) {
    // Downloads files
    // Tentukan folder file yang boleh di download
    $filename    = $_GET['filename'];

    $back_dir    = "Uploads/1/";
    $file = $back_dir . $_GET['filename'];

    if (file_exists($file)) {
        header("Content-Disposition: attachment; filename=" . basename($file));
        header("Content-Type: application/octet-stream;");
        /*header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: private');
        header('Pragma: private');
        header('Content-Length: ' . filesize($file));*/
        ob_clean();
        flush();
        readfile($file);

        exit;
    } else {
        $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
        header("location:index.php");
    }
}