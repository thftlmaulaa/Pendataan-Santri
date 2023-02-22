<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Latihan UK pendataan santri</title>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
          <div class="">
            <div class="card-header p-3 mb-2 bg-success text-white">
              Daftar Data Santri
            </div>
            </div>
            <div class="card-body">
              <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Alamat Santri</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                      <td>1</td>
                      <td>Yanto</td>
                      <td>Pekalongan</td>
                      <td>085787604355</td>
                      <td>Sapri</td>
                      <td>Irma</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Yanti</td>
                      <td>Bandung</td>
                      <td>085883590326</td>
                      <td>Yogi</td>
                      <td>Ghina</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Neti</td>
                      <td>Sulawesi</td>
                      <td>089352241765</td>
                      <td>Abdul</td>
                      <td>Susi</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Prita</td>
                      <td>NTT</td>
                      <td>081543389003</td>
                      <td>Irvan</td>
                      <td>Zulfa</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>

                  <tr>
                      <td>5</td>
                      <td>Surono</td>
                      <td>Semarang</td>
                      <td>083442640004</td>
                      <td>Tarno</td>
                      <td>Tanti</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>

                  <tr>
                      <td>6</td>
                      <td>Endah</td>
                      <td>Malang</td>
                      <td>082800545611</td>
                      <td>Burhan</td>
                      <td>Vivin</td>
                      <td class="text-center">
                        <a  class="btn btn-sm btn-primary text-light">EDIT</a>
                        <a  class="btn btn-sm btn-danger text-light">HAPUS</a>
                      </td>
                  </tr>
                 
</nav>
</body>
</html