<div class="container mt-4 mb-4">

  <div class="row mt-3">
    <div class="col-md-6">
      <a href="" class="btn btn-primary">Tambah Data Produk</a>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Daftar Produk</h3>
      <ul class="list-group">
        <?php foreach ($produk as $row) : ?>
          <li class="list-group-item"><?= $row['nama_produk']; ?>
            <br><?= $row['harga']; ?>
            <br><?= $row['alamat']; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="card-group mt-4">
    <div class="card col-lg-4">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

</div>