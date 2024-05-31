  <!-- Navbar -->
  @include('layouts.header');
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Dokter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dokter</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>Tempat lahir</th>
                  <th>Tanggal lahir</th>
                  <th>Telepon</th>
                  <th>Unit_Kerja</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_dokter as $dokter)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $dokter->nama }}</td>
                  <td>{{ $dokter->gender }}</td>
                  <td>{{ $dokter->tmp_lahir }}</td>
                  <td>{{ $dokter->tgl_lahir }}</td>
                  <td>{{ $dokter->telepon }}</td>
                  <td>{{ $dokter->nama_unit_kerja }}</td>
                  <td>
                    <a href=""><button class="btn btn-success">Detail</button></a>
                    <a href=""><button class="btn btn-warning">Edit</button></a> 
                    <a href=""><button class="btn btn-danger">Hapus</button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="btn-group-vertical">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#inputModal">Tambah</button>
          <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="inputModalLabel">Tambah Dokter</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{url('dokter/store')}}" method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                    <label for="gender">Gender</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender" name="gender" value="perempuan" class="custom-control-input">
                        <label class="custom-control-label" for="gender">Perempuan</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender2" name="gender" value="laki-laki" class="custom-control-input">
                        <label class="custom-control-label" for="gender2">Laki-Laki</label>
                      </div>
                </div>
                      <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                    </div>
                    <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="telepon" class="form-control" id="telepon" name="telepon" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
              </div>
                          <div class="form-group">
                              <label for="unit_kerja_id">Unit Kerja</label>
                              <select id="select" name="unit_kerja_id" class="form-control">
                                  @foreach ($unit_kerja as $unit_kerja)
                                  <option value="{{$unit_kerja->id}}">{{$unit_kerja->nama}}</option>
                                  @endforeach
                                  </select>                                    
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}