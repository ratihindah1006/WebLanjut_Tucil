<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kim Namjoon</td>
      <td><img src = "img/rm.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="rm" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Kim Seok Jin</td>
      <td><img src = "img/jin.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Min Yoongi</td>
      <td><img src = "img/suga.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Jung Hoseok</td>
      <td><img src = "img/jh.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Park Jimin</td>
      <td><img src = "img/jm.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Kim Taehyung</td>
      <td><img src = "img/tae.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>Jeon Jungkook</td>
      <td><img src = "img/jk.jpg" height="100px" width="100px;"></td>
      <td><p><a class="btn btn-secondary" href="#" role="button">Detail &raquo;</a></p></td>
    </tr>



<?= $this->endSection(); ?>