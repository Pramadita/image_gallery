<?php
if (isset($_GET['art1'])) {
    $dir = "Uploads/1/";
    if (file_exists($dir . $_GET['art1'])) {
        header("Content-Type: octed/stream");
        header("Content-Disposition: attachment; filename=\"" . $_GET['art1'] . "\"");
        $fp = fopen($dir . $_GET['art1'], "r");
        $data = fread($fp, filesize($dir . $_GET['art1']));
        fclose($dir);
        print($data);
    }
}
if (isset($_GET['art2'])) {
    $dir1 = "Uploads/2/";
    if (file_exists($dir1 . $_GET['art2'])) {
        header("Content-Type: octed/stream");
        header("Content-Disposition: attachment; filename=\"" . $_GET['art2'] . "\"");
        $fp = fopen($dir1 . $_GET['art2'], "r");
        $data = fread($fp, filesize($dir1 . $_GET['art2']));
        fclose($dir1);
        print($data);
    }
}
if (isset($_GET['art3'])) {
    $dir2 = "Uploads/3/";
    if (file_exists($dir2 . $_GET['art3'])) {
        header("Content-Type: octed/stream");
        header("Content-Disposition: attachment; filename=\"" . $_GET['art3'] . "\"");
        $fp = fopen($dir2 . $_GET['art3'], "r");
        $data = fread($fp, filesize($dir2 . $_GET['art3']));
        fclose($dir2);
        print($data);
    }
}
