<main class="mx-5">
    <div class="container mb-5">
        <div class="row mb-2">
            <div class="col-md-12">
                <h1>Hai ini test2</h1>
                <h3>Daftar Test2, CRUD</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row mb-2">
            <div class="mt-2 mb-3">
                <button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#test2">
                    Tambah Data
                </button>
            </div>
            <div class="col-md-6 mb-5">
                <p class="fw-bold mb-2">ini pakai ul li</p>
                <div class="card mt-3 border-0 shadow-sm bg-white rounded">
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach( $data['t2'] as $t2 ) : ?>
                                <li class="list-group-item">
                                    <?= $t2['namanovel'] ?>
                                    <a href="<?= BASEURL; ?>/test2/hapus/<?= $t2['id']?>" class="badge text-bg-danger text-decoration-none float-end me-2" onclick="return confirm('Apakah anda yakin?')">hapus</a>
                                    <a href="<?= BASEURL; ?>/test2/edit/<?= $t2['id']?>" class="badge text-bg-success text-decoration-none float-end me-2 modalEdit" data-bs-toggle="modal" data-bs-target="#test2" data-id="<?= $t2['id'];?>">edit</a>
                                    <a href="<?= BASEURL; ?>/test2/detail/<?= $t2['id']?>" class="badge text-bg-primary text-decoration-none float-end me-2">detail</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="fw-bold mb-2">ini pakai tabel</p>
                <div class="card mt-3 border-0 shadow-sm bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Novel</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Warna</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach( $data['t2'] as $t2 ) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $t2['namanovel'] ?></td>
                                        <td><?= $t2['penulis'] ?></td>
                                        <td><?= $t2['warna'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm mb-2 modalEdit" data-bs-toggle="modal" data-bs-target="#test2" data-id="<?= $t2['id'];?>">edit</button>
                                            <a href="<?= BASEURL; ?>/test2/hapus/<?= $t2['id']?>"><button type="button" class="btn btn-outline-danger btn-sm mb-2" onclick="return confirm('Apakah anda yakin?')">hapus</button></a>
                                    </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="modal fade" id="test2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="<?= BASEURL; ?>/test2/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="namanovel" class="form-label">Nama Novel</label>
            <input type="text" class="form-control" name="namanovel" id="namanovel">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <select class="form-select" id="penulis" name="penulis" aria-label="Default select example">
                <option value="Tere Liye">Tere Liye</option>
                <option value="Andrea Hirata">Andrea Hirata</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control" name="warna" id="warna">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
      </div>
    </div>
  </div>
</div>
