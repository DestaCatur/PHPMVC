<style>
   body {
    background-image: url(http://localhost/phpmvc2/public/img/background.jpg);
   }
   .table{

    color: white;
   }
   



</style>
<div class="container text-center mt-4">
    <h1 class="table">Tentang Saya</h1>
    <img src="http://localhost/phpmvc2/img/foto_destacaturwijaya_23_xirpla.jpg" alt="desta" width="200" class="rounded-circle shadow mb-2">
    <p class="table">Hallo, Nama saya <?= $data['nama']?>, Saya seorang <?=$data['pekerjaan']?></p>

</div>