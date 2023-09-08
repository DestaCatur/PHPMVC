<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman <?= $data['judul']?></title>
</head>
<body>

</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>"><i><b>Desta</b><span>Website</i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= BASE_URL; ?>/jurusan">Kompetensi Keahlian <span class="sr-only">(current)</span></a>
      </li>
                    
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">Tentang</a>
                    
                </div>
            </nav>
        </div>
    </nav>