<?php
    include "koneksi.php";

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $no_surat = $_POST['no_surat'];
            $ktg_surat = $_POST['ktg_surat'];
            $jdl_surat = $_POST['jdl_surat'];
            $nama_surat = $_FILES['nama_surat']['name'];
            $wkt_surat = $_POST['wkt_surat'];

            $dir = "file/";
            $tmpFile = $_FILES['nama_surat']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$nama_surat);

            $query = "INSERT INTO tb_arsip VALUES(null,'$no_surat', '$ktg_surat', '$jdl_surat', '$nama_surat','$wkt_surat')";
            $sql = mysqli_query($connect, $query);

                if($sql){
                    header("location: arsip.php");
                }else{
                    echo $query;
                }
            }
        }
    if(isset($_GET['hapus'])){
        $id_surat = $_GET['hapus'];
        $query = "DELETE FROM tb_arsip WHERE id_surat = '$id_surat'";
        $sql = mysqli_query($connect, $query);

        if($sql){
            header("location: arsip.php");
        }else{
            echo $query;
        }
    }
    if (isset($_GET['unduh'])) {
        $filename    = $_GET['unduh'];
    
        $back_dir    ="file/";
        $file = $back_dir.$_GET['unduh'];
         
            if (file_exists($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename='.basename($file));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: private');
                header('Pragma: private');
                header('Content-Length: ' . filesize($file));
                ob_clean();
                flush();
                readfile($file);
                
                exit;
            } 
            else {
                $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
                header("location:arsip.php");
            }
        }
?>