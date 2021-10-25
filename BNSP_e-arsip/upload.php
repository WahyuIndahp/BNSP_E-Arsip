<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="fontAwesome/css/font-awesome.min.css">
    <title>Arsip Surat</title>
</head>
<body>
    <div class="sidebar">
        <input type="checkbox" id="check">
        <div class="btn_bar">
            <label for="check">
            </label>
        </div>
    <div class="container text-white">
       <h1 class="mt-3">Arsip Data >> Unggah</h1>
        <figure>
            <blockquote class="blockquote">
                <p>
                Unggah surat yang telah terbit pada form ini untuk diarsipkan<br/>
                Catatan :
                </p>
                <figcaption class="blockquote-footer text-white">
                    Gunakan file berformat PDF
                </figcaption>
            </blockquote>
        </figure>
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <div class="mb-3 row mb-4">
                <label for="no_surat" class="col-sm-2 col-form-label">
                    Nomor Surat
                </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="2021/PST/TU/NO">
                </div>
            </div>
            <div class="mb-3 row mb-4">
                <label for="ktg_surat" class="col-sm-2 col-form-label">
                    Kategori
                </label>
                <div class="col-sm-10">
                    <select class="form-select" name="ktg_surat" id="ktg_surat">
                        <option value="Nota Dinas">Nota Dinas</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option selected value="Undangan">Undangan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row mb-4">
                <label for="jdl_surat" class="col-sm-2 col-form-label">
                Judul Surat
                </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jdl_surat" id="jdl_surat" placeholder="Masukkan Judul Surat">
                </div>
            </div>
            <div class="mb-3 row mb-4">
                <label for="nama_surat" class="col-sm-2 col-form-label">
                    File Surat (PDF)
                </label>
                <div class="col-sm-10">
                    <input class="form-control"  type="file" name="nama_surat" id="nama_surat">
                    <input type="hidden" name="wkt_surat" value="<?php echo date("d-m-Y H:i:s A"); ?>">
                </div>
            </div>
            <div class="mb-3 row mb-4">
                <div class="col">
                    <a href="arsip.php" type="button" class="btn btn-info text-white">
                        <i class="fa fa-backward "></i>
                        Kembali
                    </a>
                    <button type="submit" name="aksi" value="add" class="btn btn-success">
                        Simpan
                        <i class="fa fa-floppy-o "></i>
                    </button>
                </div>
            </div>
        </form>
    </div>  
</body>
</html>