<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mitra</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Mitra</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Perusahaan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" name="namaperusahaan" class="form-control" placeholder="Nama Perusahaan">
              </div>
              <div class="form-group">
                <label for="kemampuan_nyata">Kemampuan Nyata (Rp)</label>
                <input type="number" name="kemampuannyata" class="form-control" placeholder="Kemampuan Modal Perusahaan">
              </div>
              <div class="form-group">
                <label for="tenaga_ahli">Jumlah Tenaga Ahli</label>
                <input type="number" name="tenagaahli" class="form-control" placeholder="Tenaga Ahli Perusahaan">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
           <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Direktur</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="alamat_kantor">Nama</label>
                <input type="text" name="namadirektur" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="status_kantor">Jabatan</label>
                <input type="text" name="jabatandirektur" class="form-control" placeholder="Jabatan">
              </div>
              <div class="form-group">
                <label for="status_kantor">Kontak</label>
                <input type="text" name="kontakdirektur" class="form-control" placeholder="Nomer Kontak">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Alamat Perusahaan </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="alamat_kantor">Alamat Kantor</label>
                <textarea name="alamatkantor" class="form-control" rows="4" placeholder="Alamat Kantor Perusahaan"></textarea>
              </div>
              <div class="form-group">
                <label for="status_kantor">Status Kepemilikan</label>
                <select name="statuskantor" class="form-control custom-select">
                  <option selected disabled>Pilih Salah Satu</option>
                  <option value="Aset Perusahaan">Aset Perusahaan</option>
                  <option value="Sewa">Sewa</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Narahubung</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="namanarahubung" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="status_kantor">Jabatan</label>
                <input type="text" name="jabatannarahubung" class="form-control" placeholder="Jabatan">
              </div>
              <div class="form-group">
                <label for="status_kantor">Kontak</label>
                <input type="text" name="kontaknarahubung" class="form-control" placeholder="Nomer Kontak">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-danger ">Cancel</a>
          <input type="submit" value="Simpan" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <br><br>
  <!-- /.content-wrapper -->